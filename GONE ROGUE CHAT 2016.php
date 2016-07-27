!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){a.fn.jScrollPane=function(b){function c(b,c){function d(c){var f,h,j,k,l,o,p=!1,q=!1;if(N=c,void 0===O)l=b.scrollTop(),o=b.scrollLeft(),b.css({overflow:"hidden",padding:0}),P=b.innerWidth()+rb,Q=b.innerHeight(),b.width(P),O=a('<div class="jspPane" />').css("padding",qb).append(b.children()),R=a('<div class="jspContainer" />').css({width:P+"px",height:Q+"px"}).append(O).appendTo(b);else{if(b.css("width",""),p=N.stickToBottom&&A(),q=N.stickToRight&&B(),k=b.innerWidth()+rb!=P||b.outerHeight()!=Q,k&&(P=b.innerWidth()+rb,Q=b.innerHeight(),R.css({width:P+"px",height:Q+"px"})),!k&&sb==S&&O.outerHeight()==T)return void b.width(P);sb=S,O.css("width",""),b.width(P),R.find(">.jspVerticalBar,>.jspHorizontalBar").remove().end()}O.css("overflow","auto"),S=c.contentWidth?c.contentWidth:O[0].scrollWidth,T=O[0].scrollHeight,O.css("overflow",""),U=S/P,V=T/Q,W=V>1,X=U>1,X||W?(b.addClass("jspScrollable"),f=N.maintainPosition&&($||bb),f&&(h=y(),j=z()),e(),g(),i(),f&&(w(q?S-P:h,!1),v(p?T-Q:j,!1)),F(),C(),L(),N.enableKeyboardNavigation&&H(),N.clickOnTrack&&m(),J(),N.hijackInternalLinks&&K()):(b.removeClass("jspScrollable"),O.css({top:0,left:0,width:R.width()-rb}),D(),G(),I(),n()),N.autoReinitialise&&!pb?pb=setInterval(function(){d(N)},N.autoReinitialiseDelay):!N.autoReinitialise&&pb&&clearInterval(pb),l&&b.scrollTop(0)&&v(l,!1),o&&b.scrollLeft(0)&&w(o,!1),b.trigger("jsp-initialised",[X||W])}function e(){W&&(R.append(a('<div class="jspVerticalBar" />').append(a('<div class="jspCap jspCapTop" />'),a('<div class="jspTrack" />').append(a('<div class="jspDrag" />').append(a('<div class="jspDragTop" />'),a('<div class="jspDragBottom" />'))),a('<div class="jspCap jspCapBottom" />'))),cb=R.find(">.jspVerticalBar"),db=cb.find(">.jspTrack"),Y=db.find(">.jspDrag"),N.showArrows&&(hb=a('<a class="jspArrow jspArrowUp" />').bind("mousedown.jsp",k(0,-1)).bind("click.jsp",E),ib=a('<a class="jspArrow jspArrowDown" />').bind("mousedown.jsp",k(0,1)).bind("click.jsp",E),N.arrowScrollOnHover&&(hb.bind("mouseover.jsp",k(0,-1,hb)),ib.bind("mouseover.jsp",k(0,1,ib))),j(db,N.verticalArrowPositions,hb,ib)),fb=Q,R.find(">.jspVerticalBar>.jspCap:visible,>.jspVerticalBar>.jspArrow").each(function(){fb-=a(this).outerHeight()}),Y.hover(function(){Y.addClass("jspHover")},function(){Y.removeClass("jspHover")}).bind("mousedown.jsp",function(b){a("html").bind("dragstart.jsp selectstart.jsp",E),Y.addClass("jspActive");var c=b.pageY-Y.position().top;return a("html").bind("mousemove.jsp",function(a){p(a.pageY-c,!1)}).bind("mouseup.jsp mouseleave.jsp",o),!1}),f())}function f(){db.height(fb+"px"),$=0,eb=N.verticalGutter+db.outerWidth(),O.width(P-eb-rb);try{0===cb.position().left&&O.css("margin-left",eb+"px")}catch(a){}}function g(){X&&(R.append(a('<div class="jspHorizontalBar" />').append(a('<div class="jspCap jspCapLeft" />'),a('<div class="jspTrack" />').append(a('<div class="jspDrag" />').append(a('<div class="jspDragLeft" />'),a('<div class="jspDragRight" />'))),a('<div class="jspCap jspCapRight" />'))),jb=R.find(">.jspHorizontalBar"),kb=jb.find(">.jspTrack"),_=kb.find(">.jspDrag"),N.showArrows&&(nb=a('<a class="jspArrow jspArrowLeft" />').bind("mousedown.jsp",k(-1,0)).bind("click.jsp",E),ob=a('<a class="jspArrow jspArrowRight" />').bind("mousedown.jsp",k(1,0)).bind("click.jsp",E),N.arrowScrollOnHover&&(nb.bind("mouseover.jsp",k(-1,0,nb)),ob.bind("mouseover.jsp",k(1,0,ob))),j(kb,N.horizontalArrowPositions,nb,ob)),_.hover(function(){_.addClass("jspHover")},function(){_.removeClass("jspHover")}).bind("mousedown.jsp",function(b){a("html").bind("dragstart.jsp selectstart.jsp",E),_.addClass("jspActive");var c=b.pageX-_.position().left;return a("html").bind("mousemove.jsp",function(a){r(a.pageX-c,!1)}).bind("mouseup.jsp mouseleave.jsp",o),!1}),lb=R.innerWidth(),h())}function h(){R.find(">.jspHorizontalBar>.jspCap:visible,>.jspHorizontalBar>.jspArrow").each(function(){lb-=a(this).outerWidth()}),kb.width(lb+"px"),bb=0}function i(){if(X&&W){var b=kb.outerHeight(),c=db.outerWidth();fb-=b,a(jb).find(">.jspCap:visible,>.jspArrow").each(function(){lb+=a(this).outerWidth()}),lb-=c,Q-=c,P-=b,kb.parent().append(a('<div class="jspCorner" />').css("width",b+"px")),f(),h()}X&&O.width(R.outerWidth()-rb+"px"),T=O.outerHeight(),V=T/Q,X&&(mb=Math.ceil(1/U*lb),mb>N.horizontalDragMaxWidth?mb=N.horizontalDragMaxWidth:mb<N.horizontalDragMinWidth&&(mb=N.horizontalDragMinWidth),_.width(mb+"px"),ab=lb-mb,s(bb)),W&&(gb=Math.ceil(1/V*fb),gb>N.verticalDragMaxHeight?gb=N.verticalDragMaxHeight:gb<N.verticalDragMinHeight&&(gb=N.verticalDragMinHeight),Y.height(gb+"px"),Z=fb-gb,q($))}function j(a,b,c,d){var e,f="before",g="after";"os"==b&&(b=/Mac/.test(navigator.platform)?"after":"split"),b==f?g=b:b==g&&(f=b,e=c,c=d,d=e),a[f](c)[g](d)}function k(a,b,c){return function(){return l(a,b,this,c),this.blur(),!1}}function l(b,c,d,e){d=a(d).addClass("jspActive");var f,g,h=!0,i=function(){0!==b&&tb.scrollByX(b*N.arrowButtonSpeed),0!==c&&tb.scrollByY(c*N.arrowButtonSpeed),g=setTimeout(i,h?N.initialDelay:N.arrowRepeatFreq),h=!1};i(),f=e?"mouseout.jsp":"mouseup.jsp",e=e||a("html"),e.bind(f,function(){d.removeClass("jspActive"),g&&clearTimeout(g),g=null,e.unbind(f)})}function m(){n(),W&&db.bind("mousedown.jsp",function(b){if(void 0===b.originalTarget||b.originalTarget==b.currentTarget){var c,d=a(this),e=d.offset(),f=b.pageY-e.top-$,g=!0,h=function(){var a=d.offset(),e=b.pageY-a.top-gb/2,j=Q*N.scrollPagePercent,k=Z*j/(T-Q);if(0>f)$-k>e?tb.scrollByY(-j):p(e);else{if(!(f>0))return void i();e>$+k?tb.scrollByY(j):p(e)}c=setTimeout(h,g?N.initialDelay:N.trackClickRepeatFreq),g=!1},i=function(){c&&clearTimeout(c),c=null,a(document).unbind("mouseup.jsp",i)};return h(),a(document).bind("mouseup.jsp",i),!1}}),X&&kb.bind("mousedown.jsp",function(b){if(void 0===b.originalTarget||b.originalTarget==b.currentTarget){var c,d=a(this),e=d.offset(),f=b.pageX-e.left-bb,g=!0,h=function(){var a=d.offset(),e=b.pageX-a.left-mb/2,j=P*N.scrollPagePercent,k=ab*j/(S-P);if(0>f)bb-k>e?tb.scrollByX(-j):r(e);else{if(!(f>0))return void i();e>bb+k?tb.scrollByX(j):r(e)}c=setTimeout(h,g?N.initialDelay:N.trackClickRepeatFreq),g=!1},i=function(){c&&clearTimeout(c),c=null,a(document).unbind("mouseup.jsp",i)};return h(),a(document).bind("mouseup.jsp",i),!1}})}function n(){kb&&kb.unbind("mousedown.jsp"),db&&db.unbind("mousedown.jsp")}function o(){a("html").unbind("dragstart.jsp selectstart.jsp mousemove.jsp mouseup.jsp mouseleave.jsp"),Y&&Y.removeClass("jspActive"),_&&_.removeClass("jspActive")}function p(c,d){if(W){0>c?c=0:c>Z&&(c=Z);var e=new a.Event("jsp-will-scroll-y");if(b.trigger(e,[c]),!e.isDefaultPrevented()){var f=c||0,g=0===f,h=f==Z,i=c/Z,j=-i*(T-Q);void 0===d&&(d=N.animateScroll),d?tb.animate(Y,"top",c,q,function(){b.trigger("jsp-user-scroll-y",[-j,g,h])}):(Y.css("top",c),q(c),b.trigger("jsp-user-scroll-y",[-j,g,h]))}}}function q(a){void 0===a&&(a=Y.position().top),R.scrollTop(0),$=a||0;var c=0===$,d=$==Z,e=a/Z,f=-e*(T-Q);(ub!=c||wb!=d)&&(ub=c,wb=d,b.trigger("jsp-arrow-change",[ub,wb,vb,xb])),t(c,d),O.css("top",f),b.trigger("jsp-scroll-y",[-f,c,d]).trigger("scroll")}function r(c,d){if(X){0>c?c=0:c>ab&&(c=ab);var e=new a.Event("jsp-will-scroll-x");if(b.trigger(e,[c]),!e.isDefaultPrevented()){var f=c||0,g=0===f,h=f==ab,i=c/ab,j=-i*(S-P);void 0===d&&(d=N.animateScroll),d?tb.animate(_,"left",c,s,function(){b.trigger("jsp-user-scroll-x",[-j,g,h])}):(_.css("left",c),s(c),b.trigger("jsp-user-scroll-x",[-j,g,h]))}}}function s(a){void 0===a&&(a=_.position().left),R.scrollTop(0),bb=a||0;var c=0===bb,d=bb==ab,e=a/ab,f=-e*(S-P);(vb!=c||xb!=d)&&(vb=c,xb=d,b.trigger("jsp-arrow-change",[ub,wb,vb,xb])),u(c,d),O.css("left",f),b.trigger("jsp-scroll-x",[-f,c,d]).trigger("scroll")}function t(a,b){N.showArrows&&(hb[a?"addClass":"removeClass"]("jspDisabled"),ib[b?"addClass":"removeClass"]("jspDisabled"))}function u(a,b){N.showArrows&&(nb[a?"addClass":"removeClass"]("jspDisabled"),ob[b?"addClass":"removeClass"]("jspDisabled"))}function v(a,b){var c=a/(T-Q);p(c*Z,b)}function w(a,b){var c=a/(S-P);r(c*ab,b)}function x(b,c,d){var e,f,g,h,i,j,k,l,m,n=0,o=0;try{e=a(b)}catch(p){return}for(f=e.outerHeight(),g=e.outerWidth(),R.scrollTop(0),R.scrollLeft(0);!e.is(".jspPane");)if(n+=e.position().top,o+=e.position().left,e=e.offsetParent(),/^body|html$/i.test(e[0].nodeName))return;h=z(),j=h+Q,h>n||c?l=n-N.horizontalGutter:n+f>j&&(l=n-Q+f+N.horizontalGutter),isNaN(l)||v(l,d),i=y(),k=i+P,i>o||c?m=o-N.horizontalGutter:o+g>k&&(m=o-P+g+N.horizontalGutter),isNaN(m)||w(m,d)}function y(){return-O.position().left}function z(){return-O.position().top}function A(){var a=T-Q;return a>20&&a-z()<10}function B(){var a=S-P;return a>20&&a-y()<10}function C(){R.unbind(zb).bind(zb,function(a,b,c,d){bb||(bb=0),$||($=0);var e=bb,f=$,g=a.deltaFactor||N.mouseWheelSpeed;return tb.scrollBy(c*g,-d*g,!1),e==bb&&f==$})}function D(){R.unbind(zb)}function E(){return!1}function F(){O.find(":input,a").unbind("focus.jsp").bind("focus.jsp",function(a){x(a.target,!1)})}function G(){O.find(":input,a").unbind("focus.jsp")}function H(){function c(){var a=bb,b=$;switch(d){case 40:tb.scrollByY(N.keyboardSpeed,!1);break;case 38:tb.scrollByY(-N.keyboardSpeed,!1);break;case 34:case 32:tb.scrollByY(Q*N.scrollPagePercent,!1);break;case 33:tb.scrollByY(-Q*N.scrollPagePercent,!1);break;case 39:tb.scrollByX(N.keyboardSpeed,!1);break;case 37:tb.scrollByX(-N.keyboardSpeed,!1)}return e=a!=bb||b!=$}var d,e,f=[];X&&f.push(jb[0]),W&&f.push(cb[0]),O.bind("focus.jsp",function(){b.focus()}),b.attr("tabindex",0).unbind("keydown.jsp keypress.jsp").bind("keydown.jsp",function(b){if(b.target===this||f.length&&a(b.target).closest(f).length){var g=bb,h=$;switch(b.keyCode){case 40:case 38:case 34:case 32:case 33:case 39:case 37:d=b.keyCode,c();break;case 35:v(T-Q),d=null;break;case 36:v(0),d=null}return e=b.keyCode==d&&g!=bb||h!=$,!e}}).bind("keypress.jsp",function(b){return b.keyCode==d&&c(),b.target===this||f.length&&a(b.target).closest(f).length?!e:void 0}),N.hideFocus?(b.css("outline","none"),"hideFocus"in R[0]&&b.attr("hideFocus",!0)):(b.css("outline",""),"hideFocus"in R[0]&&b.attr("hideFocus",!1))}function I(){b.attr("tabindex","-1").removeAttr("tabindex").unbind("keydown.jsp keypress.jsp"),O.unbind(".jsp")}function J(){if(location.hash&&location.hash.length>1){var b,c,d=escape(location.hash.substr(1));try{b=a("#"+d+', a[name="'+d+'"]')}catch(e){return}b.length&&O.find(d)&&(0===R.scrollTop()?c=setInterval(function(){R.scrollTop()>0&&(x(b,!0),a(document).scrollTop(R.position().top),clearInterval(c))},50):(x(b,!0),a(document).scrollTop(R.position().top)))}}function K(){a(document.body).data("jspHijack")||(a(document.body).data("jspHijack",!0),a(document.body).delegate('a[href*="#"]',"click",function(b){var c,d,e,f,g,h,i=this.href.substr(0,this.href.indexOf("#")),j=location.href;if(-1!==location.href.indexOf("#")&&(j=location.href.substr(0,location.href.indexOf("#"))),i===j){c=escape(this.href.substr(this.href.indexOf("#")+1));try{d=a("#"+c+', a[name="'+c+'"]')}catch(k){return}d.length&&(e=d.closest(".jspScrollable"),f=e.data("jsp"),f.scrollToElement(d,!0),e[0].scrollIntoView&&(g=a(window).scrollTop(),h=d.offset().top,(g>h||h>g+a(window).height())&&e[0].scrollIntoView()),b.preventDefault())}}))}function L(){var a,b,c,d,e,f=!1;R.unbind("touchstart.jsp touchmove.jsp touchend.jsp click.jsp-touchclick").bind("touchstart.jsp",function(g){var h=g.originalEvent.touches[0];a=y(),b=z(),c=h.pageX,d=h.pageY,e=!1,f=!0}).bind("touchmove.jsp",function(g){if(f){var h=g.originalEvent.touches[0],i=bb,j=$;return tb.scrollTo(a+c-h.pageX,b+d-h.pageY),e=e||Math.abs(c-h.pageX)>5||Math.abs(d-h.pageY)>5,i==bb&&j==$}}).bind("touchend.jsp",function(){f=!1}).bind("click.jsp-touchclick",function(){return e?(e=!1,!1):void 0})}function M(){var a=z(),c=y();b.removeClass("jspScrollable").unbind(".jsp"),O.unbind(".jsp"),b.replaceWith(yb.append(O.children())),yb.scrollTop(a),yb.scrollLeft(c),pb&&clearInterval(pb)}var N,O,P,Q,R,S,T,U,V,W,X,Y,Z,$,_,ab,bb,cb,db,eb,fb,gb,hb,ib,jb,kb,lb,mb,nb,ob,pb,qb,rb,sb,tb=this,ub=!0,vb=!0,wb=!1,xb=!1,yb=b.clone(!1,!1).empty(),zb=a.fn.mwheelIntent?"mwheelIntent.jsp":"mousewheel.jsp";"border-box"===b.css("box-sizing")?(qb=0,rb=0):(qb=b.css("paddingTop")+" "+b.css("paddingRight")+" "+b.css("paddingBottom")+" "+b.css("paddingLeft"),rb=(parseInt(b.css("paddingLeft"),10)||0)+(parseInt(b.css("paddingRight"),10)||0)),a.extend(tb,{reinitialise:function(b){b=a.extend({},N,b),d(b)},scrollToElement:function(a,b,c){x(a,b,c)},scrollTo:function(a,b,c){w(a,c),v(b,c)},scrollToX:function(a,b){w(a,b)},scrollToY:function(a,b){v(a,b)},scrollToPercentX:function(a,b){w(a*(S-P),b)},scrollToPercentY:function(a,b){v(a*(T-Q),b)},scrollBy:function(a,b,c){tb.scrollByX(a,c),tb.scrollByY(b,c)},scrollByX:function(a,b){var c=y()+Math[0>a?"floor":"ceil"](a),d=c/(S-P);r(d*ab,b)},scrollByY:function(a,b){var c=z()+Math[0>a?"floor":"ceil"](a),d=c/(T-Q);p(d*Z,b)},positionDragX:function(a,b){r(a,b)},positionDragY:function(a,b){p(a,b)},animate:function(a,b,c,d,e){var f={};f[b]=c,a.animate(f,{duration:N.animateDuration,easing:N.animateEase,queue:!1,step:d,complete:e})},getContentPositionX:function(){return y()},getContentPositionY:function(){return z()},getContentWidth:function(){return S},getContentHeight:function(){return T},getPercentScrolledX:function(){return y()/(S-P)},getPercentScrolledY:function(){return z()/(T-Q)},getIsScrollableH:function(){return X},getIsScrollableV:function(){return W},getContentPane:function(){return O},scrollToBottom:function(a){p(Z,a)},hijackInternalLinks:a.noop,destroy:function(){M()}}),d(c)}return b=a.extend({},a.fn.jScrollPane.defaults,b),a.each(["arrowButtonSpeed","trackClickSpeed","keyboardSpeed"],function(){b[this]=b[this]||b.speed}),this.each(function(){var d=a(this),e=d.data("jsp");e?e.reinitialise(b):(a("script",d).filter('[type="text/javascript"],:not([type])').remove(),e=new c(d,b),d.data("jsp",e))})},a.fn.jScrollPane.defaults={showArrows:!1,maintainPosition:!0,stickToBottom:!1,stickToRight:!1,clickOnTrack:!0,autoReinitialise:!1,autoReinitialiseDelay:500,verticalDragMinHeight:0,verticalDragMaxHeight:99999,horizontalDragMinWidth:0,horizontalDragMaxWidth:99999,contentWidth:void 0,animateScroll:!1,animateDuration:300,animateEase:"linear",hijackInternalLinks:!1,verticalGutter:4,horizontalGutter:4,mouseWheelSpeed:3,arrowButtonSpeed:0,arrowRepeatFreq:50,arrowScrollOnHover:!1,trackClickSpeed:0,trackClickRepeatFreq:70,verticalArrowPositions:"split",horizontalArrowPositions:"split",enableKeyboardNavigation:!0,hideFocus:!1,keyboardSpeed:0,initialDelay:300,speed:30,scrollPagePercent:.8}});
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>gone rogue chat no registration no download required and no trolls allowed free chat.</title>

<!-- Loading the jScrollPane CSS, along with the styling of the
     chat in chat.css and the rest of the page in page.css -->
}
<link rel="stylesheet" type="text/css" href="js/jScrollPane/jScrollPane.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<link rel="stylesheet" type="text/css" href="css/chat.css" />

</head>

<body>

<div id="chatContainer">

    <div id="chatTopBar" class="rounded"></div>
    <div id="chatLineHolder"></div>

    <div id="chatUsers" class="rounded"></div>
    <div id="chatBottomBar" class="rounded">
        <div class="tip"></div>

        <form id="loginForm" method="post" action="">
            <input id="name" name="name" class="rounded" maxlength="20" />
            <input id="email" name="email" class="rounded" />
            <input type="submit" class="blueButton" value="Login" />
        </form>

        <form id="submitForm" method="post" action="">
            <input id="chatText" name="chatText" class="rounded" maxlength="255" />
            <input type="submit" class="blueButton" value="Submit" />
        </form>
		ajax.php

require "classes/DB.class.php";
require "classes/Chat.class.php";
require "classes/ChatBase.class.php";
require "classes/ChatLine.class.php";
require "classes/ChatUser.class.php";

session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){

    // If magic quotes is enabled, strip the extra slashes
    array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
    array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{

    // Connecting to the database
    DB::init($dbOptions);

    $response = array();

    // Handling the supported actions:

    switch($_GET['action']){

        case 'login':
            $response = Chat::login($_POST['name'],$_POST['email']);
        break;

        case 'checkLogged':
            $response = Chat::checkLogged();
        break;

        case 'logout':
            $response = Chat::logout();
        break;

        case 'submitChat':
            $response = Chat::submitChat($_POST['chatText']);
        break;

        case 'getUsers':
            $response = Chat::getUsers();
        break;

        case 'getChats':
            $response = Chat::getChats($_GET['lastID']);
        break;

        default:
            throw new Exception('Wrong action');
    }

    echo json_encode($response);
}
catch(Exception $e){
    die(json_encode(array('error' => $e->getMessage())));
}
DB.class.php

class DB {
	private static $instance;
	private $MySQLi;

	private function __construct(array $dbOptions){

		$this->MySQLi = @ new mysqli(	$dbOptions['db_host'],
										$dbOptions['db_user'],
										$dbOptions['db_pass'],
										$dbOptions['db_name'] );

		if (mysqli_connect_errno()) {
			throw new Exception('Database error.');
		}

		$this->MySQLi->set_charset("utf8");
	}

	public static function init(array $dbOptions){
		if(self::$instance instanceof self){
			return false;
		}

		self::$instance = new self($dbOptions);
	}

	public static function getMySQLiObject(){
		return self::$instance->MySQLi;
	}

	public static function query($q){
		return self::$instance->MySQLi->query($q);
	}

	public static function esc($str){
		return self::$instance->MySQLi->real_escape_string(htmlspecialchars($str));
	}
}
ChatBase.class.php

/* This is the base class, used by both ChatLine and ChatUser */

class ChatBase{

    // This constructor is used by all the chat classes:

    public function __construct(array $options){

        foreach($options as $k=>$v){
            if(isset($this->$k)){
                $this->$k = $v;
            }
        }
    }
	ChatLine.class.php

/* Chat line is used for the chat entries */

class ChatLine extends ChatBase{

    protected $text = '', $author = '', $gravatar = '';

    public function save(){
        DB::query("
            INSERT INTO webchat_lines (author, gravatar, text)
            VALUES (
                '".DB::esc($this->author)."',
                '".DB::esc($this->gravatar)."',
                '".DB::esc($this->text)."'
        )");

        // Returns the MySQLi object of the DB class

        return DB::getMySQLiObject();
    }
}
ChatUser.class.php

class ChatUser extends ChatBase{

    protected $name = '', $gravatar = '';

    public function save(){

        DB::query("
            INSERT INTO webchat_users (name, gravatar)
            VALUES (
                '".DB::esc($this->name)."',
                '".DB::esc($this->gravatar)."'
        )");

        return DB::getMySQLiObject();
    }

    public function update(){
        DB::query("
            INSERT INTO webchat_users (name, gravatar)
            VALUES (
                '".DB::esc($this->name)."',
                '".DB::esc($this->gravatar)."'
            ) ON DUPLICATE KEY UPDATE last_activity = NOW()");
    }
}

Chat.class.php – Part 1

/* The Chat class exploses public static methods, used by ajax.php */

class Chat{

    public static function login($name,$email){
        if(!$name || !$email){
            throw new Exception('Fill in all the required fields.');
        }

        if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
            throw new Exception('Your email is invalid.');
        }

        // Preparing the gravatar hash:
        $gravatar = md5(strtolower(trim($email)));

        $user = new ChatUser(array(
            'name'        => $name,
            'gravatar'    => $gravatar
        ));

        // The save method returns a MySQLi object
        if($user->save()->affected_rows != 1){
            throw new Exception('This nick is in use.');
        }

        $_SESSION['user']    = array(
            'name'        => $name,
            'gravatar'    => $gravatar
        );

        return array(
            'status'    => 1,
            'name'        => $name,
            'gravatar'    => Chat::gravatarFromHash($gravatar)
        );
    }

    public static function checkLogged(){
        $response = array('logged' => false);

        if($_SESSION['user']['name']){
            $response['logged'] = true;
            $response['loggedAs'] = array(
                'name'        => $_SESSION['user']['name'],
                'gravatar'    => Chat::gravatarFromHash($_SESSION['user']['gravatar'])
            );
        }

        return $response;
    }

    public static function logout(){
        DB::query("DELETE FROM webchat_users WHERE name = '".DB::esc($_SESSION['user']['name'])."'");

        $_SESSION = array();
        unset($_SESSION);

        return array('status' => 1);
    }
	Chat.class.php – Part 2

    public static function submitChat($chatText){
        if(!$_SESSION['user']){
            throw new Exception('You are not logged in');
        }

        if(!$chatText){
            throw new Exception('You haven\' entered a chat message.');
        }

        $chat = new ChatLine(array(
            'author'    => $_SESSION['user']['name'],
            'gravatar'    => $_SESSION['user']['gravatar'],
            'text'        => $chatText
        ));

        // The save method returns a MySQLi object
        $insertID = $chat->save()->insert_id;

        return array(
            'status'    => 1,
            'insertID'    => $insertID
        );
    }

    public static function getUsers(){
        if($_SESSION['user']['name']){
            $user = new ChatUser(array('name' => $_SESSION['user']['name']));
            $user->update();
        }

        // Deleting chats older than 5 minutes and users inactive for 30 seconds

        DB::query("DELETE FROM webchat_lines WHERE ts < SUBTIME(NOW(),'0:5:0')");
        DB::query("DELETE FROM webchat_users WHERE last_activity < SUBTIME(NOW(),'0:0:30')");

        $result = DB::query('SELECT * FROM webchat_users ORDER BY name ASC LIMIT 18');

        $users = array();
        while($user = $result->fetch_object()){
            $user->gravatar = Chat::gravatarFromHash($user->gravatar,30);
            $users[] = $user;
        }

        return array(
            'users' => $users,
            'total' => DB::query('SELECT COUNT(*) as cnt FROM webchat_users')->fetch_object()->cnt
        );
    }

    public static function getChats($lastID){
        $lastID = (int)$lastID;

        $result = DB::query('SELECT * FROM webchat_lines WHERE id > '.$lastID.' ORDER BY id ASC');

        $chats = array();
        while($chat = $result->fetch_object()){

            // Returning the GMT (UTC) time of the chat creation:

            $chat->time = array(
                'hours'        => gmdate('H',strtotime($chat->ts)),
                'minutes'    => gmdate('i',strtotime($chat->ts))
            );

            $chat->gravatar = Chat::gravatarFromHash($chat->gravatar);

            $chats[] = $chat;
        }

        return array('chats' => $chats);
    }

    public static function gravatarFromHash($hash, $size=23){
        return 'http://www.gravatar.com/avatar/'.$hash.'?size='.$size.'&default='.
                urlencode('http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?size='.$size);
    }
}

    </div>

</div>

<!-- Loading jQuery, the mousewheel plugin and jScrollPane, along with our script.js -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jScrollPane/jquery.mousewheel.js"></script>
<script src="js/jScrollPane/jScrollPane.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<link rel="stylesheet" href="/path/to/hack.css" />
<link rel="stylesheet" href="/path/to/dark.css" />
<body class="hack dark">
<!-- standard mode -->
<link rel="stylesheet" href="/path/to/standard.css">

<body class="standard"></body>
<!-- dark mode -->
<link rel="stylesheet" href="/path/to/dark.css">
<body class="hack dark"></body>
?>
<form class="form">
  <fieldset class="form-group">
    <label for="username">USERNAME:</label>
    <input id="username" type="text" placeholder="ritchie_rich..." class="form-control">
  </fieldset>
  <fieldset class="form-group">
    <label for="email">EMAIL:</label>
    <input id="email" type="email" placeholder="" class="form-control">
  </fieldset>
  <fieldset class="form-group">
    <label for="country">COUNTRY:</label>
    <select id="country" class="form-control">
      <option>China</option>
      <option>U.S.</option>
      <option>U.K.</option>
      <option>Japan</option>
    </select>
  </fieldset>
  <fieldset class="form-group form-textarea">
    <label for="message">MESSAGE:</label>
    <textarea id="message" rows="5" class="form-control"></textarea>
  </fieldset>
  <div class="form-actions">
    <button type="button" class="btn btn-primary btn-block">Submit</button>
  </div>
</form>
<?
***Stateful Form***
.form-group.form-success
.form-group.form-error
.form-group.form-warning

<fieldset class="form-group form-success">
  <label for="phone">Phone Number:</label>
  <input id="phone" type="text" placeholder="" class="form-control">
  <div class="help-block">In this format: +86 xxx xxx xxxxx</div>
</fieldset>
}
<!-- with only an arrow -->
<div class="progress-bar">
  <div class="progress-bar-filled" style="width: 40%"></div>
</div>

<!-- with a percentage showing above the arrow -->
<div class="progress-bar progress-bar-show-percent" data-filled="Loading 40%">
  <div class="progress-bar-filled" style="width: 40%"></div>
</div>

<button class="btn btn-default">Default</button>
<button class="btn btn-primary">Primary</button>
<button class="btn btn-success">Success</button>
<button class="btn btn-info">Info</button>
<button class="btn btn-warning">Warning</button>
<button class="btn btn-error">Error</button>

<button class="btn btn-primary btn-ghost">Ghost Button</button>

<div class="btn-group">
  <button class="btn btn-success btn-ghost">Left</button>
  <button class="btn btn-success btn-ghost">Middle</button>
  <button class="btn btn-success btn-ghost">Right</button>
</div>

<div class="card">
  <header class="card-header">title</header>
  <div class="card-content">
    <div class="inner">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quas ex vero enim in doloribus officiis ullam vel nam esse sapiente velit incidunt. Eaque quod et, aut maiores excepturi sint.</div>
  </div>
</div>

<div class="alert alert-success">Success message</div>
<div class="alert alert-info">Info message</div>
<div class="alert alert-warning">Warning message</div>
<div class="alert alert-error">Error message</div>

<div class="menu">
   <a class="menu-item">
     item #1 <div class="pull-right">»</div>
   </a>
   <a class="menu-item active">
     item #2 <div class="pull-right">»</div>
   </a>
   <a class="menu-item">
     item #3 <div class="pull-right">»</div>
   </a>
 </div>

<div class="media">
  <div class="media-left">
    <div class="avatarholder">e</div>
  </div>
  <div class="media-body">
    <div class="media-heading">EGOIST @egoist</div>
    <div class="media-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga vel, voluptates, doloremque nesciunt illum est corrupti nostrum expedita adipisci dicta vitae? Eveniet maxime quibusdam modi molestias alias et incidunt est.</div>
  </div>
</div>

<!-- right align -->
<div class="media">
  <div class="media-body">
    <div class="media-heading">EGOIST @egoist</div>
    <div class="media-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga vel, voluptates, doloremque nesciunt illum est corrupti nostrum expedita adipisci dicta vitae? Eveniet maxime quibusdam modi molestias alias et incidunt est.</div>
  </div>
  <div class="media-right">
    <div class="avatarholder">e</div>
  </div>
</div>

<div class="loading"></div>

<button class="btn btn-info btn-ghost">
  <div class="loading"></div>
  Loading...
</button>
require "classes/DB.class.php";
require "classes/Chat.class.php";
require "classes/ChatBase.class.php";
require "classes/ChatLine.class.php";
require "classes/ChatUser.class.php";

session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){

    // If magic quotes is enabled, strip the extra slashes
    array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
    array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{

    // Connecting to the database
    DB::init($dbOptions);

    $response = array();

    // Handling the supported actions:

    switch($_GET['action']){

        case 'login':
            $response = Chat::login($_POST['name'],$_POST['email']);
        break;

        case 'checkLogged':
            $response = Chat::checkLogged();
        break;

        case 'logout':
            $response = Chat::logout();
        break;

        case 'submitChat':
            $response = Chat::submitChat($_POST['chatText']);
        break;

        case 'getUsers':
            $response = Chat::getUsers();
        break;

        case 'getChats':
            $response = Chat::getChats($_GET['lastID']);
        break;

        default:
            throw new Exception('Wrong action');
    }

    echo json_encode($response);
}
catch(Exception $e){
    die(json_encode(array('error' => $e->getMessage())));
}

DB.class.php

class DB {
	private static $instance;
	private $MySQLi;

	private function __construct(array $dbOptions){

		$this->MySQLi = @ new mysqli(	$dbOptions['db_host'],
										$dbOptions['db_user'],
										$dbOptions['db_pass'],
										$dbOptions['db_name'] );

		if (mysqli_connect_errno()) {
			throw new Exception('Database error.');
		}

		$this->MySQLi->set_charset("utf8");
	}

	public static function init(array $dbOptions){
		if(self::$instance instanceof self){
			return false;
		}

		self::$instance = new self($dbOptions);
	}

	public static function getMySQLiObject(){
		return self::$instance->MySQLi;
	}

	public static function query($q){
		return self::$instance->MySQLi->query($q);
	}

	public static function esc($str){
		return self::$instance->MySQLi->real_escape_string(htmlspecialchars($str));
	}
}

ChatBase.class.php

/* This is the base class, used by both ChatLine and ChatUser */

class ChatBase{

    // This constructor is used by all the chat classes:

    public function __construct(array $options){

        foreach($options as $k=>$v){
            if(isset($this->$k)){
                $this->$k = $v;
            }
        }
    }
}

ChatLine.class.php

/* Chat line is used for the chat entries */

class ChatLine extends ChatBase{

    protected $text = '', $author = '', $gravatar = '';

    public function save(){
        DB::query("
            INSERT INTO webchat_lines (author, gravatar, text)
            VALUES (
                '".DB::esc($this->author)."',
                '".DB::esc($this->gravatar)."',
                '".DB::esc($this->text)."'
        )");

        // Returns the MySQLi object of the DB class

        return DB::getMySQLiObject();
    }
}
ChatUser.class.php

class ChatUser extends ChatBase{

    protected $name = '', $gravatar = '';

    public function save(){

        DB::query("
            INSERT INTO webchat_users (name, gravatar)
            VALUES (
                '".DB::esc($this->name)."',
                '".DB::esc($this->gravatar)."'
        )");

        return DB::getMySQLiObject();
    }

    public function update(){
        DB::query("
            INSERT INTO webchat_users (name, gravatar)
            VALUES (
                '".DB::esc($this->name)."',
                '".DB::esc($this->gravatar)."'
            ) ON DUPLICATE KEY UPDATE last_activity = NOW()");
    }
}

Chat.class.php – Part 1

/* The Chat class exploses public static methods, used by ajax.php */

class Chat{

    public static function login($name,$email){
        if(!$name || !$email){
            throw new Exception('Fill in all the required fields.');
        }

        if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
            throw new Exception('Your email is invalid.');
        }

        // Preparing the gravatar hash:
        $gravatar = md5(strtolower(trim($email)));

        $user = new ChatUser(array(
            'name'        => $name,
            'gravatar'    => $gravatar
        ));

        // The save method returns a MySQLi object
        if($user->save()->affected_rows != 1){
            throw new Exception('This nick is in use.');
        }

        $_SESSION['user']    = array(
            'name'        => $name,
            'gravatar'    => $gravatar
        );

        return array(
            'status'    => 1,
            'name'        => $name,
            'gravatar'    => Chat::gravatarFromHash($gravatar)
        );
    }

    public static function checkLogged(){
        $response = array('logged' => false);

        if($_SESSION['user']['name']){
            $response['logged'] = true;
            $response['loggedAs'] = array(
                'name'        => $_SESSION['user']['name'],
                'gravatar'    => Chat::gravatarFromHash($_SESSION['user']['gravatar'])
            );
        }

        return $response;
    }

    public static function logout(){
        DB::query("DELETE FROM webchat_users WHERE name = '".DB::esc($_SESSION['user']['name'])."'");

        $_SESSION = array();
        unset($_SESSION);

        return array('status' => 1);
    }
	Chat.class.php – Part 2

    public static function submitChat($chatText){
        if(!$_SESSION['user']){
            throw new Exception('You are not logged in');
        }

        if(!$chatText){
            throw new Exception('You haven\' entered a chat message.');
        }

        $chat = new ChatLine(array(
            'author'    => $_SESSION['user']['name'],
            'gravatar'    => $_SESSION['user']['gravatar'],
            'text'        => $chatText
        ));

        // The save method returns a MySQLi object
        $insertID = $chat->save()->insert_id;

        return array(
            'status'    => 1,
            'insertID'    => $insertID
        );
    }

    public static function getUsers(){
        if($_SESSION['user']['name']){
            $user = new ChatUser(array('name' => $_SESSION['user']['name']));
            $user->update();
        }

        // Deleting chats older than 5 minutes and users inactive for 30 seconds

        DB::query("DELETE FROM webchat_lines WHERE ts < SUBTIME(NOW(),'0:5:0')");
        DB::query("DELETE FROM webchat_users WHERE last_activity < SUBTIME(NOW(),'0:0:30')");

        $result = DB::query('SELECT * FROM webchat_users ORDER BY name ASC LIMIT 18');

        $users = array();
        while($user = $result->fetch_object()){
            $user->gravatar = Chat::gravatarFromHash($user->gravatar,30);
            $users[] = $user;
        }

        return array(
            'users' => $users,
            'total' => DB::query('SELECT COUNT(*) as cnt FROM webchat_users')->fetch_object()->cnt
        );
    }

    public static function getChats($lastID){
        $lastID = (int)$lastID;

        $result = DB::query('SELECT * FROM webchat_lines WHERE id > '.$lastID.' ORDER BY id ASC');

        $chats = array();
        while($chat = $result->fetch_object()){

            // Returning the GMT (UTC) time of the chat creation:

            $chat->time = array(
                'hours'        => gmdate('H',strtotime($chat->ts)),
                'minutes'    => gmdate('i',strtotime($chat->ts))

            $chat->gravatar = Chat::gravatarFromHash($chat->gravatar);

            $chats[] = $chat;
        }

        return array('chats' => $chats);
    }

    public static function gravatarFromHash($hash, $size=23){
        return 'http://www.gravatar.com/avatar/'.$hash.'?size='.$size.'&default='.
                urlencode('http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?size='.$size);
    }
}
<!-- styles needed by jScrollPane -->
<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<!-- latest jQuery direct from google's CDN -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="script/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="script/jquery.jscrollpane.min.js"></script>

Then you just need to initialise jScrollPane on document.ready (using a selector which will find the content you want to apply jScrollPane to):

$(function()
{
	$('.scroll-pane').jScrollPane();
});
chat.css – Part 1

/* Main chat container */

#chatContainer{
    width:510px;
    margin:100px auto;
    position:relative;
}

/* Top Bar */

#chatTopBar{
    height:40px;
    background:url('../img/solid_gray.jpg') repeat-x #d0d0d0;
    border:1px solid #fff;
    margin-bottom:15px;
    position:relative;

    color:#777;
    text-shadow:1px 1px 0 #FFFFFF;
}

#chatTopBar .name{
    position:absolute;
    top:10px;
    left:40px;
}

#chatTopBar img{
    left:9px;
    position:absolute;
    top:8px;
}

/* Chats */

#chatLineHolder{
    height:360px;
    width:350px;
    margin-bottom:20px;
    outline:none;
}

.chat{
    background:url('../img/chat_line_bg.jpg') repeat-x #d5d5d5;
    min-height:24px;
    padding:6px;
    border:1px solid #FFFFFF;

    padding:8px 6px 4px 37px;
    position:relative;
    margin:0 10px 10px 0;
}

.chat:last-child{
    margin-bottom:0;
}

.chat .gravatar{
    background:url('http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?size=23') no-repeat;
    left:7px;
    position:absolute;
    top:7px;
}

.chat img{
    display:block;
    visibility:hidden;
}
chat.css – Part 2

/* Chat User Area */

#chatUsers{
    background-color:#202020;
    border:1px solid #111111;
    height:360px;
    position:absolute;
    right:0;
    top:56px;
    width:150px;
}

#chatUsers .user{
    background:url('http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?size=30') no-repeat 1px 1px #444444;
    border:1px solid #111111;
    float:left;
    height:32px;
    margin:10px 0 0 10px;
    width:32px;
}

#chatUsers .user img{
    border:1px solid #444444;
    display:block;
    visibility:hidden;
}

/* Bottom Bar */

#chatBottomBar{
    background:url('../img/solid_gray.jpg') repeat-x #d0d0d0;
    position:relative;
    padding:10px;
    border:1px solid #fff;
}

#chatBottomBar .tip{
    position:absolute;
    width:0;
    height:0;
    border:10px solid transparent;
    border-bottom-color:#eeeeee;
    top:-20px;
    left:20px;
}

#submitForm{
    display:none;
}
chat.css – Part 3

/* Overriding the default styles of jScrollPane */

.jspVerticalBar{
    background:none;
    width:20px;
}

.jspTrack{
    background-color:#202020;
    border:1px solid #111111;
    width:3px;
    right:-10px;
}

.jspDrag {
    background:url('../img/slider.png') no-repeat;
    width:20px;
    left:-9px;
    height:20px !important;
    margin-top:-5px;
}

.jspDrag:hover{
    background-position:left bottom;
}

/* Additional styles */

#chatContainer .blueButton{
    background:url('../img/button_blue.png') no-repeat;
    border:none !important;
    color:#516D7F !important;
    display:inline-block;
    font-size:13px;
    height:29px;
    text-align:center;
    text-shadow:1px 1px 0 rgba(255, 255, 255, 0.4);
    width:75px;
    margin:0;
    cursor:pointer;
}

#chatContainer .blueButton:hover{
    background-position:left bottom;
}
script.js – Part 1

$(document).ready(function(){

    chat.init();

});

var chat = {

    // data holds variables for use in the class:

    data : {
        lastID         : 0,
        noActivity    : 0
    },

    // Init binds event listeners and sets up timers:

    init : function(){

        // Using the defaultText jQuery plugin, included at the bottom:
        $('#name').defaultText('Nickname');
        $('#email').defaultText('Email (Gravatars are Enabled)');

        // Converting the #chatLineHolder div into a jScrollPane,
        // and saving the plugin's API in chat.data:

        chat.data.jspAPI = $('#chatLineHolder').jScrollPane({
            verticalDragMinHeight: 12,
            verticalDragMaxHeight: 12
        }).data('jsp');

        // We use the working variable to prevent
        // multiple form submissions:

        var working = false;

        // Logging a person in the chat:

        $('#loginForm').submit(function(){

            if(working) return false;
            working = true;

            // Using our tzPOST wrapper function
            // (defined in the bottom):

            $.tzPOST('login',$(this).serialize(),function(r){
                working = false;

                if(r.error){
                    chat.displayError(r.error);
                }
                else chat.login(r.name,r.gravatar);
            });

            return false;
        });

 // Submitting a new chat entry:

        $('#submitForm').submit(function(){

            var text = $('#chatText').val();

            if(text.length == 0){
                return false;
            }

            if(working) return false;
            working = true;

            // Assigning a temporary ID to the chat:
            var tempID = 't'+Math.round(Math.random()*1000000),
                params = {
                    id            : tempID,
                    author        : chat.data.name,
                    gravatar    : chat.data.gravatar,
                    text        : text.replace(/</g,'&lt;').replace(/>/g,'&gt;')
                };

            // Using our addChatLine method to add the chat
            // to the screen immediately, without waiting for
            // the AJAX request to complete:

            chat.addChatLine($.extend({},params));

            // Using our tzPOST wrapper method to send the chat
            // via a POST AJAX request:

            $.tzPOST('submitChat',$(this).serialize(),function(r){
                working = false;

                $('#chatText').val('');
                $('div.chat-'+tempID).remove();

                params['id'] = r.insertID;
                chat.addChatLine($.extend({},params));
            });

            return false;
        });

        // Logging the user out:

        $('a.logoutButton').live('click',function(){

            $('#chatTopBar > span').fadeOut(function(){
                $(this).remove();
            });

            $('#submitForm').fadeOut(function(){
                $('#loginForm').fadeIn();
            });

            $.tzPOST('logout');

            return false;
        });

        // Checking whether the user is already logged (browser refresh)

        $.tzGET('checkLogged',function(r){
            if(r.logged){
                chat.login(r.loggedAs.name,r.loggedAs.gravatar);
            }
        });

        // Self executing timeout functions

        (function getChatsTimeoutFunction(){
            chat.getChats(getChatsTimeoutFunction);
        })();

        (function getUsersTimeoutFunction(){
            chat.getUsers(getUsersTimeoutFunction);
        })();

    },

script.js – Part 3

    // The login method hides displays the
    // user's login data and shows the submit form

    login : function(name,gravatar){

        chat.data.name = name;
        chat.data.gravatar = gravatar;
        $('#chatTopBar').html(chat.render('loginTopBar',chat.data));

        $('#loginForm').fadeOut(function(){
            $('#submitForm').fadeIn();
            $('#chatText').focus();
        });

    },

    // The render method generates the HTML markup
    // that is needed by the other methods:

    render : function(template,params){

        var arr = [];
        switch(template){
            case 'loginTopBar':
                arr = [
                '<span><img src="',params.gravatar,'" width="23" height="23" />',
                '<span class="name">',params.name,
                '</span><a href="" class="logoutButton rounded">Logout</a></span>'];
            break;

            case 'chatLine':
                arr = [
                    '<div class="chat chat-',params.id,' rounded"><span class="gravatar">'+
                    '<img src="',params.gravatar,'" width="23" height="23" '+
                    'onload="this.style.visibility=\'visible\'" />',
                    '</span><span class="author">',params.author,
                    ':</span><span class="text">',params.text,
                    '</span><span class="time">',params.time,'</span></div>'];
            break;

            case 'user':
                arr = [
                    '<div class="user" title="',params.name,'"><img src="',params.gravatar,
                    '" width="30" height="30" onload="this.style.visibility=\'visible\'"'+
                    ' /></div>'
                ];
            break;
        }

        // A single array join is faster than
        // multiple concatenations

        return arr.join('');

    },

ript.js – Part 4

// The addChatLine method ads a chat entry to the page

    addChatLine : function(params){

        // All times are displayed in the user's timezone

        var d = new Date();
        if(params.time) {

            // PHP returns the time in UTC (GMT). We use it to feed the date
            // object and later output it in the user's timezone. JavaScript
            // internally converts it for us.

            d.setUTCHours(params.time.hours,params.time.minutes);
        }

        params.time = (d.getHours() < 10 ? '0' : '' ) + d.getHours()+':'+
                      (d.getMinutes() < 10 ? '0':'') + d.getMinutes();

        var markup = chat.render('chatLine',params),
            exists = $('#chatLineHolder .chat-'+params.id);

        if(exists.length){
            exists.remove();
        }

        if(!chat.data.lastID){
            // If this is the first chat, remove the
            // paragraph saying there aren't any:

            $('#chatLineHolder p').remove();
        }

        // If this isn't a temporary chat:
        if(params.id.toString().charAt(0) != 't'){
            var previous = $('#chatLineHolder .chat-'+(+params.id - 1));
            if(previous.length){
                previous.after(markup);
            }
            else chat.data.jspAPI.getContentPane().append(markup);
        }
        else chat.data.jspAPI.getContentPane().append(markup);

        // As we added new content, we need to
        // reinitialise the jScrollPane plugin:

        chat.data.jspAPI.reinitialise();
        chat.data.jspAPI.scrollToBottom(true);

    }script.js – Part 5

// This method requests the latest chats
    // (since lastID), and adds them to the page.

    getChats : function(callback){
        $.tzGET('getChats',{lastID: chat.data.lastID},function(r){

            for(var i=0;i<r.chats.length;i++){
                chat.addChatLine(r.chats[i]);
            }

            if(r.chats.length){
                chat.data.noActivity = 0;
                chat.data.lastID = r.chats[i-1].id;
            }
            else{
                // If no chats were received, increment
                // the noActivity counter.

                chat.data.noActivity++;
            }

            if(!chat.data.lastID){
                chat.data.jspAPI.getContentPane().html('<p class="noChats">No chats yet</p>');
            }

            // Setting a timeout for the next request,
            // depending on the chat activity:

            var nextRequest = 1000;

            // 2 seconds
            if(chat.data.noActivity > 3){
                nextRequest = 2000;
            }

            if(chat.data.noActivity > 10){
                nextRequest = 5000;
            }

            // 15 seconds
            if(chat.data.noActivity > 20){
                nextRequest = 15000;
            }

            setTimeout(callback,nextRequest);
        });
    },

    // Requesting a list with all the users.

    getUsers : function(callback){
        $.tzGET('getUsers',function(r){

            var users = [];

            for(var i=0; i< r.users.length;i++){
                if(r.users[i]){
                    users.push(chat.render('user',r.users[i]));
                }
            }

            var message = '';

            if(r.total<1){
                message = 'No one is online';
            }
            else {
                message = r.total+' '+(r.total == 1 ? 'person':'people')+' online';
            }

            users.push('<p class="count">'+message+'</p>');

            $('#chatUsers').html(users.join(''));

            setTimeout(callback,15000);
        });
    },

script.js – Part 6

    // This method displays an error message on the top of the page:

    displayError : function(msg){
        var elem = $('<div>',{
            id        : 'chatErrorMessage',
            html    : msg
        });

        elem.click(function(){
            $(this).fadeOut(function(){
                $(this).remove();
            });
        });

        setTimeout(function(){
            elem.click();
        },5000);

        elem.hide().appendTo('body').slideDown();
    }
};

// Custom GET & POST wrappers:

$.tzPOST = function(action,data,callback){
    $.post('php/ajax.php?action='+action,data,callback,'json');
}

$.tzGET = function(action,data,callback){
    $.get('php/ajax.php?action='+action,data,callback,'json');
}

// A custom jQuery method for placeholder text:

$.fn.defaultText = function(value){

    var element = this.eq(0);
    element.data('defaultText',value);

    element.focus(function(){
        if(element.val() == value){
            element.val('').removeClass('defaultText');
        }
    }).blur(function(){
        if(element.val() == '' || element.val() == value){
            element.addClass('defaultText').val(value);
        }
    });

    return element.blur();
}