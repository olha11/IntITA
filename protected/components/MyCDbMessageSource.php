<?php
/**
 * Created by PhpStorm.
 * User: Ivanna
 * Date: 06.04.2015
 * Time: 19:22
 */

class MyCDbMessageSource extends CDbMessageSource{

    const CACHE_KEY_PREFIX='Yii.CDbMessageSource.';
    /**
     * @var string the ID of the database connection application component. Defaults to 'db'.
     */
    public $connectionID='db';
    /**
     * @var string the name of the source message table. Defaults to 'SourceMessage'.
     */
    public $sourceMessageTable='sourcemessage';
    /**
     * @var string the name of the translated message table. Defaults to 'Message'.
     */
    public $translatedMessageTable='Message';
    /**
     * @var integer the time in seconds that the messages can remain valid in cache.
     * Defaults to 0, meaning the caching is disabled.
     */
    public $cachingDuration=0;
    /**
     * @var string the ID of the cache application component that is used to cache the messages.
     * Defaults to 'cache' which refers to the primary cache application component.
     * Set this property to false if you want to disable caching the messages.
     */
    public $cacheID='cache';

    /**
     * Loads the message translation for the specified language and category.
     * @param string $category the message category
     * @param string $language the target language
     * @return array the loaded messages
     */
    protected function loadMessages($category,$language)
    {
        if($this->cachingDuration>0 && $this->cacheID!==false && ($cache=Yii::app()->getComponent($this->cacheID))!==null)
        {
            $key=self::CACHE_KEY_PREFIX.'.messages.'.$category.'.'.$language;
            if(($data=$cache->get($key))!==false)
                return unserialize($data);
        }

        $messages=$this->loadMessagesFromDb($category,$language);

        if(isset($cache))
            $cache->set($key,serialize($messages),$this->cachingDuration);

        return $messages;
    }

    private $_db;

    /**
     * Returns the DB connection used for the message source.
     * @throws CException if {@link connectionID} application component is invalid
     * @return CDbConnection the DB connection used for the message source.
     * @since 1.1.5
     */
    public function getDbConnection()
    {

        if($this->_db===null)
        {
            $this->_db=Yii::app()->getComponent($this->connectionID);
            if(!$this->_db instanceof CDbConnection)
                throw new CException(Yii::t('yii','CDbMessageSource.connectionID is invalid. Please make sure "{id}" refers to a valid database application component.',
                    array('{id}'=>$this->connectionID)));
        }
        return $this->_db;
    }

    public function changeTranslatedTable($table){
        $this->translatedMessageTable = $table;
    }

    protected function loadMessagesFromDb($category,$language)
    {
        $app = Yii::app();
        $command=$this->getDbConnection()->createCommand()
            ->select("t1.message AS message, t2.translation AS translation")
            ->from(array("{$this->sourceMessageTable} t1","{$app->session['translatedTable']} t2"))
            ->where('t1.id=t2.id AND t1.category=:category AND t2.language=:language',array(':category'=>$category,':language'=>$language))
        ;
        $messages=array();
        foreach($command->queryAll() as $row)
            $messages[$row['message']]=$row['translation'];

        return $messages;
    }

}