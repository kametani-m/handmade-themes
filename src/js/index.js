//js
var humburger = require('./modules/humburger')
var header = require('./modules/header')
var top = require('./modules/top')
var pagetop = require('./modules/pagetop')


//foundation
import './../scss/foundation/base.scss';
import './../scss/foundation/mixin.scss';
import './../scss/foundation/variable.scss';
import './../scss/foundation/reset.scss';

//layout
import './../scss/layout/l-header.scss';
import './../scss/layout/l-footer.scss';
import './../scss/layout/l-main.scss';
import './../scss/layout/l-about.scss';
import './../scss/layout/l-skill.scss';
import './../scss/layout/l-works.scss';
import './../scss/layout/l-contact.scss';

//object.scss
import './../scss/object/component/c-button.scss';
import './../scss/object/component/small_title.scss';
import './../scss/object/project/p-about.scss';
import './../scss/object/project/p-footer.scss';
import './../scss/object/project/p-main.scss';
import './../scss/object/project/p-header.scss';
import './../scss/object/project/p-contact.scss';
import './../scss/object/project/p-skill.scss';
import './../scss/object/project/p-total-back.scss';
import './../scss/object/project/p-works.scss';
import './../scss/object/utility/u-utility.scss';


//humburgermenu
var class_name = '.header-humburger';
humburger(class_name);

//スクロールheader色変換
var scroll = 'scroll';
header(scroll);

//topタイトルフェードイン
var top_status = 'load';
top(top_status);

//pagetop表示
var scroll = 'scroll';
pagetop(scroll);