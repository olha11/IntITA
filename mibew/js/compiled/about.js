/*!
 * This file is a part of Mibew Messenger.
 *
 * Copyright 2005-2015 the original author or authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
!function(e,r){e.updateVersion=function(e){e.core&&e.core.stable&&r(document).ready(function(){var o=r("#current-version").html(),n=e.core.stable;o!=n.version?(o<n.version&&r("#current-version").css("color","red"),r("#latest-version").html(n.version+', Download <a href="'+n.download+'">'+n.title+"</a>")):(r("#current-version").css("color","green"),r("#latest-version").html(n.version))})}}(Mibew,jQuery);