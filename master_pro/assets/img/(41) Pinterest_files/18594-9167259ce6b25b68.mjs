(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[18594],{294184:(e,t)=>{var i;!function(){var s={}.hasOwnProperty;function n(){for(var e=[],t=0;t<arguments.length;t++){var i=arguments[t];if(i){var r=typeof i;if("string"===r||"number"===r)e.push(i);else if(Array.isArray(i)&&i.length){var o=n.apply(null,i);o&&e.push(o)}else if("object"===r)for(var a in i)s.call(i,a)&&i[a]&&e.push(a)}}return e.join(" ")}e.exports?(n.default=n,e.exports=n):void 0===(i=function(){return n}.apply(t,[]))||(e.exports=i)}()},407043:(e,t,i)=>{i.d(t,{B:()=>l,v:()=>a});var s=i(385740),n=i(425288),r=i(785893);const{Provider:o,useHook:a}=(0,n.Z)("ContextLogger");function l({children:e,value:t}){const{setViewContextData:i}=(0,s.sV)();return t.injectSetViewContextDataFromHook=i,(0,r.jsx)(o,{value:t,children:e})}},112690:(e,t,i)=>{i.d(t,{Z:()=>n});var s=i(407043);const n=()=>(0,s.v)().logContextEvent},385740:(e,t,i)=>{i.d(t,{BE:()=>c,Ih:()=>d,SU:()=>p,sV:()=>a});var s=i(667294),n=i(425288),r=i(785893);const{Provider:o,useHook:a}=(0,n.Z)("View");let l;function c(){return l}function d({children:e,initialState:t={}}){const[i,n]=(0,s.useState)(t),a=(0,s.useCallback)((()=>{l={},n({})}),[]),c=(0,s.useCallback)((e=>{l={...l,...e},n((t=>({...t,...e})))}),[]),d=(0,s.useMemo)((()=>({viewContextData:i,clearViewContextData:a,setViewContextData:c})),[i,c,a]);return(0,r.jsx)(s.Fragment,{children:(0,r.jsx)(o,{value:d,children:e})})}function p(){const{viewContextData:e}=a();return e}},375571:(e,t,i)=>{i.d(t,{Z:()=>a});var s=i(667294),n=i(172071),r=i(395164);function o(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}class a extends s.Component{constructor(...e){super(...e),o(this,"state",{error:null,info:null}),o(this,"resetError",(()=>{this.setState({error:null,info:null})}))}componentDidCatch(e,t){try{const t=this.props.name,i=this.props.type||"secondary";(0,r.T)({errorBoundary:t,errorBoundaryType:i,message:e.message,name:e.name,stack:e.stack}),n.Z.increment("react.error_boundary",.1,{component:void 0,name:this.props.name})}catch(i){n.Z.increment("react.error_boundary.error",1,{name:this.props.name})}this.setState({error:e,info:t})}render(){const{renderErrorState:e}=this.props,{error:t,info:i}=this.state;return t&&i?e?e({error:t,info:i,resetError:this.resetError}):null:this.props.children}}},116303:(e,t,i)=>{i.d(t,{Z:()=>o});var s=i(883119),n=i(785893);const r=(e,t)=>{const i=null==e?void 0:e.includes("images/user/default");return Boolean(i&&t)};function o({accessibilityLabel:e,name:t,outline:i,size:o,src:a,verified:l}){return(0,n.jsx)(s.qE,{accessibilityLabel:e,name:t,outline:i,size:o,src:r(a,t)?void 0:a,verified:l})}},499128:(e,t,i)=>{i.d(t,{UZ:()=>c,Vg:()=>l,ZP:()=>d});var s=i(667294),n=i(829407),r=i(50286),o=i(883119),a=i(785893);const l=200,c=({deviceType:e,hiding:t,visible:i})=>({marginTop:"desktop"===e?10:0,opacity:0,position:"relative",transform:"desktop"===e?"translateY(200px)":"translateY(-200px)",transition:"opacity 0.1s ease-in-out",visibility:"hidden",pointerEvents:"auto",...i?{opacity:1,transform:"translateY(0)",transition:"all 0.7s cubic-bezier(.19, 1.15, .48, 1)",visibility:"visible"}:{},...i&&t?{opacity:0,transform:"scale(1.1)",transition:"opacity transform 0.2s"}:{}});function d({button:e,dataTestId:t,duration:i=2e3,href:d,iconThumbnail:p,imageUrl:u,onClick:h,onHide:m,openNewPage:g,text:v,thumbnailShape:b="square",variant:y="default"}){const f=(0,r.ZP)(),[_,x]=(0,s.useState)(!1),[w,T]=(0,s.useState)(!1),j=(0,s.useRef)(),I=()=>{x(!0),j.current=setTimeout(m,l)},k=()=>{j.current&&clearTimeout(j.current)},S=()=>{j.current=setTimeout(I,i)};(0,n.Z)((()=>(setTimeout((()=>T(!0)),100),S(),k)));const C="string"==typeof v?v:`${v[0]} ${v[1]}`,O=u?(0,a.jsx)(o.xu,{height:48,overflow:"hidden",width:48,children:(0,a.jsx)(o.Ee,{alt:C,fit:"cover",naturalHeight:1,naturalWidth:1,src:u})}):void 0,P=(0,a.jsx)(o.FN,{button:e,text:v,thumbnail:null!=p?p:O,thumbnailShape:b,variant:y});return(0,a.jsx)(o.xu,{dangerouslySetInlineStyle:{__style:{...c({deviceType:f,hiding:_,visible:w})}},"data-test-id":null!=t?t:"toast",onMouseEnter:k,onMouseLeave:S,children:d?(0,a.jsx)(o.iP,{role:"link",href:d,onTap:({event:e})=>null==h?void 0:h(e),target:g?"blank":null,rounding:"pill",children:P}):P})}},898781:(e,t,i)=>{i.d(t,{ZP:()=>a,oz:()=>r,q6:()=>n});var s=i(425288);const{Provider:n,Consumer:r,useHook:o}=(0,s.Z)("i18n"),a=o},12610:(e,t,i)=>{function s(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}i.d(t,{Z3:()=>u,LU:()=>h,ZP:()=>m});const n=1e6,r=window.location.search.includes("debug_impressions=1")||document.cookie&&document.cookie.indexOf("debug_impressions=1")>-1,o={paused:"Pause",resumed:"Resume",stopped:"Flush",enter:"Enter viewport",exit:"Exit viewport"},a={},l={background:"#FF8A8A",transform:"scale(.98)"},c={init:e=>({transform:`scale(${a[e]?.8:.99})`,transition:"transform .2s ease-in-out",background:"#8E8E8E"}),[o.enter]:{background:"#A0DCC8",transform:"scale(.99)"},[o.exit]:l,[o.stopped]:l,[o.paused]:l,[o.resumed]:{background:"#0FA573",transform:"scale(.99)"}};class d{constructor(e){s(this,"setMutationObserver",(e=>(this.mutationObserver=e,this))),s(this,"startMutationObserver",(e=>{this.mutationObserver&&this.mutationObserver.observe(this.node,e)})),s(this,"stopMutationObserver",(()=>{this.mutationObserver&&this.mutationObserver.disconnect()})),s(this,"handleIntersectionChange",(e=>{const t=e.intersectionRatio>0||e.isIntersecting;if(t&&!this.inViewport){const e=Date.now();this.startTime=e,this._debug(o.enter,{startTime:e,node:this.node}),this.enterCallbacks.forEach((e=>e()))}else!t&&this.inViewport&&(this._debug(o.exit,!0),this.exitCallbacks.forEach((e=>e(this.toJSON()))));this.inViewport=t})),this.enterCallbacks=[],this.exitCallbacks=[],this.inViewport=!1,this.node=e,this.startTime=0,this.debugId=""}onEnterViewport(e){return this.enterCallbacks.push(e),this}onExitViewport(e){return this.exitCallbacks.push(e),this}setDebugId(e){return this.debugId=e,r&&Object.assign(this.node.style,c.init(e)),this}pause(){return this.inViewport&&(this._debug(o.paused,!0),this.exitCallbacks.forEach((e=>e(this.toJSON())))),this}resume(){if(this.inViewport){const e=Date.now();this._debug(o.resumed,{startTime:e}),this.startTime=e}return this}stop(e){return this.inViewport&&(this._debug(o.stopped,!0),this.exitCallbacks.forEach((t=>t(this.toJSON(e))))),this}toJSON(e=""){return{startTime:this.startTime*n,endTime:Date.now()*n,forcedExit:e}}toDebugJSON(){return{pinID:this.debugId,startTime:this.startTime,endTime:Date.now(),duration:(Date.now()-this.startTime)/1e3+" seconds"}}_debug(e,t){if(r)switch(window.console.log(`📌 ${e} -- ${this.debugId}`),!0===t&&window.console.log(this.toDebugJSON()),"object"==typeof t&&window.console.log(t),c[e]&&Object.assign(this.node.style,c[e]),e){case o.flushed:case o.paused:case o.exit:a[this.debugId]=!0}}}function p(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}const u=!0,h=!1;class m{constructor(){p(this,"_delegateChange",(e=>{e.forEach((e=>{const t=this.activeImpressions.get(e.target);t&&t.handleIntersectionChange(e)}))})),p(this,"_handleMutations",((e,t)=>{const i=this.mutationObservers.get(t);i&&i.offsetHeight<1&&i&&this.stop(i,"removed")})),this.activeImpressions=new Map,this.mutationObservers=new Map,this.bottomHeight=0,this.bottomObstructions=new Set,this.pausePriority=h,this.observer=new window.IntersectionObserver(this._delegateChange),this.paused=!1,this.topHeight=0,this.topObstructions=new Set,this.inExperiment=!1}setExperimentStatus(e){this.inExperiment!==e&&(this.inExperiment=e)}stop(e,t=""){const i=this.activeImpressions.get(e);i&&(i.stop(t),this.mutationObservers.delete(i.mutationObserver),i.stopMutationObserver(),this.activeImpressions.delete(e),this.observer.unobserve(e))}start(e){let t=this.activeImpressions.get(e);if(!t){t=new d(e),this.activeImpressions.set(e,t),this.observer.observe(e);const i=(e,t)=>this._handleMutations(e,t);t.setMutationObserver(new window.MutationObserver(i)),this.mutationObservers.set(t.mutationObserver,e),t.startMutationObserver({subtree:!0,attributes:!0,attributeFilter:["style"]})}return t}pause(e=u){this.paused||(Array.from(this.activeImpressions.values()).forEach((e=>e.pause())),this.paused=!0,this.pausePriority===h&&(this.pausePriority=e))}resume(e=u){e===h&&this.pausePriority===u||this.paused&&(Array.from(this.activeImpressions.values()).forEach((e=>e.resume())),this.paused=!1,this.pausePriority=h)}addObstruction(e,t){"top"===e?this.topObstructions.add(t):"bottom"===e&&this.bottomObstructions.add(t),this._calculateRootMargins()}removeObstruction(e,t){"top"===e?this.topObstructions.delete(t):"bottom"===e&&this.bottomObstructions.delete(t),this._calculateRootMargins()}updateObstructions(){this._calculateRootMargins()}_calculateRootMargins(){const e=Array.from(this.topObstructions).reduce(((e,t)=>{const{bottom:i}=t.getBoundingClientRect();return i>e?i:e}),0),t=window.innerHeight-Array.from(this.bottomObstructions).reduce(((e,t)=>{const{top:i}=t.getBoundingClientRect();return i<e?i:e}),window.innerHeight);if(e!==this.topHeight||t!==this.bottomHeight){const i={rootMargin:`${-e}px 0px ${-t}px`};this.observer.disconnect(),this.observer=new window.IntersectionObserver(this._delegateChange,i),Array.from(this.activeImpressions.values()).forEach((e=>this.observer.observe(e.node))),this.topHeight=e,this.bottomHeight=t}}}},564194:(e,t,i)=>{i.d(t,{Z:()=>h});var s=i(667294),n=i(973935),r=i(834911),o=i(124580),a=i(407043),l=i(802201),c=i(785893);function d(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}const p={Article:{impressionType:"articleImpressions",idType:"articleIdStr",eventType:3829},Pin:{impressionType:"pinImpressions",idType:"pinIdStr",eventType:18},Board:{impressionType:"boardImpressions",idType:"boardIdStr",eventType:3700},Interest:{impressionType:"topicImpressions",idType:"topicIdStr",eventType:3703},Search:{impressionType:"searchImpressions",idType:"term",eventType:3803},Story:{impressionType:"storyImpressions",idType:"storyIdStr",eventType:170},ActivationCard:{impressionType:"activationCardImpressions",idType:"experienceIdStr",eventType:8547},User:{impressionType:"userImpressions",idType:"userIdStr",eventType:3704},News:{impressionType:"newsHubData",idType:"newsIdStr",eventType:4110},Guide:{impressionType:"guideImpressions",idType:"term",eventType:7573},TodayArticle:{impressionType:"todayArticleImpressions",idType:"todayArticleIdStr",eventType:8569},Banner:{impressionType:"bannerImpressions",idType:"userIdStr",eventType:9061},Comment:{impressionType:"commentImpressions",idType:"commentIdStr",eventType:9127}};class u extends s.Component{constructor(e){super(e),d(this,"trackImpression",(()=>{try{this.node=(0,n.findDOMNode)(this),this.node instanceof HTMLElement&&this.impressionsFramework.start(this.node).onExitViewport(this.logImpression).setDebugId(this.props.loggingId||"unknown")}catch(e){window.console.error('Can only track impressions for type "HTMLElement"')}})),d(this,"logImpression",(e=>{const{carousel_data:t,closeupImpressionType:i,closeupNavigationType:s,componentType:n,contextLogData:r,elementType:o,impressionAuxFields:a,impressionType:l,loggingId:c,objectIdStr:d,slotIndex:u,trackCarousel:h,viewData:m,viewParameter:g,viewType:v,logContextEvent:b}=this.props,y=p[l],f=y.idType,_=e.forcedExit&&"removed"===e.forcedExit?0:void 0,x={endTime:e.endTime,[f]:c,slotIndex:u,time:e.startTime,renderDuration:e.endTime-e.startTime,type:i,...a,forcedExit:_};if(h||b({event_type:y.eventType,component:n,element:o,event_data:{[y.impressionType]:[x]},object_id_str:d,view_type:v,view_data:m||{},view_parameter:g,aux_data:{...r,closeup_navigation_type:s}}),t&&h){const{carousel_slots:e,index:i=0,id:s}=t;b({event_type:7352,component:n,event_data:{pinCarouselSlotImpressions:[{...x,carouselDataId:Number(s),carouselSlotId:(null==e?void 0:e[i])&&Number(e[i].id),slotIndex:i}]},object_id_str:d,view_type:v,view_data:m||{},view_parameter:g,aux_data:{...r}})}})),this.impressionsFramework=e.impressionsFramework||o.Z}componentDidMount(){this.props.inImpressionExp&&!this.impressionsFramework.inExperiment&&this.impressionsFramework.setExperimentStatus(!0),this.props.isPaused||this.trackImpression()}componentDidUpdate(e){e.isPaused&&!this.props.isPaused&&this.trackImpression()}componentWillUnmount(){this.node instanceof HTMLElement&&this.impressionsFramework.stop(this.node)}render(){return s.Children.only(this.props.children)}}function h(e){const{logContextEvent:t}=(0,a.v)(),{loggingId:i}=e,s=(0,l.AF)(),n=i?s[i]:{};return(0,c.jsx)(u,{...e,logContextEvent:t,carousel_data:(0,r.Z)({pin:n})})}},124580:(e,t,i)=>{i.d(t,{Z:()=>s});const s=new(i(12610).ZP)},53987:(e,t,i)=>{i.d(t,{wy:()=>P,Fw:()=>V,bo:()=>D,oF:()=>J,bW:()=>b,AX:()=>u,Fy:()=>p,XE:()=>d,am:()=>o,pD:()=>h,OJ:()=>l,LO:()=>ne,Gl:()=>Y,h3:()=>G,PY:()=>_,tk:()=>f,Ni:()=>y,pV:()=>E,L6:()=>O,b0:()=>v,jC:()=>H,O7:()=>K,LM:()=>W,OK:()=>S,mP:()=>x,C$:()=>w,J3:()=>L,Fr:()=>z,Xn:()=>T,l4:()=>C,b_:()=>U,J:()=>a,dZ:()=>c,re:()=>I,RU:()=>Q,Ui:()=>m,KY:()=>g,fY:()=>X,uM:()=>F,x7:()=>$,rk:()=>re,cD:()=>A,dW:()=>oe,Pu:()=>q,En:()=>Z,ej:()=>ie,gf:()=>k,mY:()=>ee,kY:()=>se,cY:()=>B,$Y:()=>M,Zz:()=>j,$V:()=>R,j8:()=>N,YW:()=>te});const s=new RegExp(/^\/(?!(?:pin|categories|report|search|password|terms|discover|help|email|topics|explore|pw|login|signup|about|business|source|ideas|today|tv))[\w\d\-]+\/(?!(?:following|followers|_tools|_created|_saved|tried))[\w\d\-]+(?=\/|$)/),n=["/BingSiteAuth.xml","/about","/add-account","/ads","/age_verification","/all","/apple-app-site-association","/apple-app-site-association.p7m","/attribution_source","/bot.html","/browserbutton","/buy-it","/careers","/categories","/close-account","/content-claiming","/convert-business","/convert-personal","/create-business","/create-linked-business","/create-personal","/creation-inspiration","/csrf_error","/ct.html","/deactivate-account","/developers","/discover","/edit","/email_verification_error","/engagement","/explore","/favicon.ico","/fb.html","/following","/google_gdn.html","/google_search.html","/googlef5dc42d6e03f6e61.html","/guidedsearch","/help","/holidays-celebrations","/homefeed","/idea-pin-builder","/idea-pin-invite","/ideas","/inbox","/invited","/jobs","/live-session","/login","/login_redirect","/logout","/manifest.json","/manifest.webapp","/me","/messages","/mobile","/notifications","/oauth","/app-factory-oauth","/appealed-pin","/oembed.json","/offline.html","/offsite","/opensearch.xml","/parent_contact_info","/pin-builder","/pin-editor","/pin_catalog","/pin_redirect","/pinterest-wellbeing","/pinterest-predicts","/pinterestlens","/pinterestlenstryon","/pinterestwellbeing","/policy","/product-catalogs","/recently-viewed","/report","/robots.txt","/safe-redirect","/search","/settings","/signup","/socialmanager","/story-pin-builder","/story-pin-invite","/story_feed","/story_pins","/sw-shell.html","/sw.html","/sw.js","/switch_account","/terms","/today","/topics","/transparent.html","/tv","/unauth-profile","/unlink","/upload-image","/upload-profile-image","/verified","/verify","/web-mentorship","/welcome","/windows-app-web-link","/your-shop"];var r=i(925927);const o=e=>s.test(e.pathname),a=(e,t)=>{const{pathname:i}=e;return o(e)&&i.match(t||"?")},l=e=>{const{pathname:t}=e;return!!(0,r.LX)(t,{path:"/:username/:boardId/:boardSectionId",exact:!0})&&!t.match(/^\/.+\/.+\/(_tools)/i)},c=(e,t)=>{const{pathname:i}=e;return l(e)&&i.match(t||"?")},d=e=>!!(0,r.LX)(e.pathname,{path:"/board/:id/edit",exact:!0}),p=e=>!!(0,r.LX)(e.pathname,{path:"/board/:id/edit/collaborators",exact:!0}),u=e=>!!(0,r.LX)(e.pathname,{path:"/board/:id/edit/add_collaborators",exact:!0}),h=e=>!!(0,r.LX)(e.pathname,{path:"/boardsection/:id/edit",exact:!0}),m=e=>!!(0,r.LX)(e.pathname,{path:"/pin/:id/comments",exact:!0}),g=e=>!!(0,r.LX)(e.pathname,{path:"/pin/:id/edit",exact:!0}),v=e=>!!(0,r.LX)(e.pathname,{path:"/conversation/:id",exact:!0}),b=e=>!!(0,r.LX)(e.pathname,{path:"/appealed-pin/",exact:!0}),y=e=>e.pathname.startsWith("/business/"),f=e=>e.pathname.startsWith("/business/login"),_=e=>e.pathname.startsWith("/business/invite/"),x=e=>!!(0,r.LX)(e.pathname,{path:"/pin/:id/visual-search/",exact:!0}),w=e=>"/"===e.pathname,T=e=>e.pathname.startsWith("/login"),j=e=>!!(0,r.LX)(e.pathname,{path:"/today",exact:!0}),I=e=>e.pathname.startsWith("/password/reset")||!!(0,r.LX)(e.pathname,{path:"/pw/:username",exact:!0}),k=e=>e.pathname.startsWith("/signup"),S=e=>e.pathname.startsWith("/email/subscription"),C=e=>e.pathname.startsWith("/notifications/"),O=e=>!!(0,r.LX)(e.pathname,{path:"/pin/:id",exact:!0}),P=e=>O(e)&&void 0===e.state,E=e=>e.pathname.startsWith("/pin_redirect"),Z=e=>e.pathname.startsWith("/search"),L=e=>e.pathname.startsWith("/ideas"),R=e=>e.pathname.startsWith("/topics"),M=e=>e.pathname.startsWith("/today/article/")||e.pathname.startsWith("/today/best/")||e.pathname.startsWith("/today/trending/"),D=e=>j(e)||M(e)||e.pathname.startsWith("/today/popular/"),W=e=>/^\/discover\/article\/\S+\/?/i.test(e.pathname),H=e=>e.pathname.startsWith("/pin/create/"),A=e=>!!(0,r.LX)(e.pathname,{path:"/:username/",exact:!0})&&!n.includes(e.pathname.replace(/\/$/,"")),N=e=>e.pathname.startsWith("/unauth-profile"),F=e=>e.pathname.startsWith("/pin/"),z=e=>"#imgViewer"===e.hash,X=e=>!!(0,r.LX)(e.pathname,{path:"/pin/:id",exact:!1})&&(e.pathname.includes("/sent/")||e.pathname.includes("/feedback/")),V=e=>(e=>new RegExp("invite_code").test(e.search))(e)&&((X(e)?"pin":o(e)&&"board")||A(e)&&"profile")||null,$=e=>e.pathname.includes("/repin/x"),B=e=>e.pathname.startsWith("/_/storyboard"),U=e=>e.pathname.startsWith("/oauth"),J=e=>e.pathname.startsWith("/app-factory-oauth"),q=e=>e.pathname.includes("/scheduled-pin/"),Y=e=>e.pathname.startsWith("/business/convert"),G=e=>e.pathname.startsWith("/business/hub"),K=e=>e.pathname.startsWith("/pin-editor"),Q=e=>e.pathname.startsWith("/pin-builder"),ee=e=>e.pathname.startsWith("/story-pin-builder")||e.pathname.startsWith("/idea-pin-builder"),te=e=>e.pathname.startsWith("/advertiser/quick-promote"),ie=e=>e.pathname.startsWith("/settings"),se=e=>e.pathname.startsWith("/story-pin-invite")||e.pathname.startsWith("/idea-pin-invite"),ne=e=>void 0!==e.pathname&&e.pathname.startsWith("/business/business-access/")&&e.pathname.includes("/dashboard/"),re=e=>void 0!==e.pathname&&e.pathname.startsWith("/tv/studio"),oe=e=>void 0!==e.pathname&&e.pathname.startsWith("/business/schedule_call/")},623568:(e,t,i)=>{i.d(t,{Js:()=>r,NK:()=>v,Nc:()=>b,VX:()=>o,Zt:()=>m,_J:()=>c,_Q:()=>n,cL:()=>u,dZ:()=>_,hb:()=>g,hy:()=>l,iR:()=>s,jL:()=>a,o:()=>y,pU:()=>f,rM:()=>h,sV:()=>d,sY:()=>p});const s=e=>!!e&&!!e.video_list,n=e=>!!e.promoted_is_lead_ad,r=(e,t)=>{let i=e&&e.url?e.url.split("/")[1]:"";return t&&t.full_name&&(i=t.full_name),i},o=e=>{var t;return e.rich_summary&&e.rich_summary.products&&e.rich_summary.products.length>0||(null===(t=e.rich_metadata)||void 0===t?void 0:t.products)&&e.rich_metadata.products.length>0||!1},a=e=>!!e.promoter&&!e.is_downstream_promotion,l=({story_pin_data_id:e})=>!!e,c=e=>!!e.video_status&&5!==e.video_status,d=e=>["email","messages","deep_linking"].includes(e),p=e=>!!e&&"gif"===e,u=e=>!(!e.embed||!e.embed.src||p(e.embed.type)||(e=>!!e.embed&&"pinstory"===e.embed.subtype)(e)),h=({mobile_link:e,tracked_link:t,link:i})=>!e&&!t&&!i,m=e=>{var t,i,s;return e?e.mobile_link||e.tracked_link||e.link||(null!==(t=null===(i=(null!==(s=e.images)&&void 0!==s?s:{}).orig)||void 0===i?void 0:i.url)&&void 0!==t?t:""):null},g=e=>{const t="image";return e?l(e)?"storyPin":s(e.videos)?"video":t:t},v=(e,t)=>({deeplinkUri:{android:`pin/${e}/repin`,iOS:`repin/${e}`},mwebUri:{pathname:`/pin/${e}/repin/`,state:{trackingParams:t.state?t.state.trackingParams:""}}});function b(e){var t,i;return!s(e.videos)&&!l(e)&&0!==Object.keys((null===(t=e.aggregated_pin_data)||void 0===t||null===(i=t.creator_analytics)||void 0===i?void 0:i["30d_realtime"])||{}).length}function y(e){var t;return 0!==Object.keys((null===(t=e.creator_analytics)||void 0===t?void 0:t["30d_realtime"])||{}).length}function f(e){var t;return 0!==Object.keys((null===(t=e.public_creator_analytics)||void 0===t?void 0:t.all_time_realtime)||{}).length}function _(e){var t,i;return!(null===(t=e.creator_analytics)||void 0===t||null===(i=t["30d_realtime"])||void 0===i||!i.is_realtime)}},391143:(e,t,i)=>{i.d(t,{Z:()=>n});var s=i(643913);function n({storyCategory:e,query:t,referringSource:i,bubbleId:n,storyId:r}){const o=[0,24,21,26].includes(e),a=(0,s.Z)({q:t,rs:i||void 0,b_id:n,source_id:r});return o?`/discover/article/${n}`:"/search/pins/"+(a?"?"+a:"")}},622096:(e,t,i)=>{i.d(t,{L_:()=>n,Nh:()=>r,qn:()=>s});const s=(e,t)=>{if("undefined"==typeof window)return t;try{return window.sessionStorage.getItem(e)}catch(i){return window.console.error("Cannot access sessionStorage."),t}},n=e=>{if("undefined"!=typeof window)try{window.sessionStorage.removeItem(e)}catch(t){window.console.error("Cannot access sessionStorage.")}},r=(e,t)=>{if("undefined"!=typeof window)try{window.sessionStorage.setItem(e,t)}catch(i){window.console.error("Cannot access sessionStorage.")}}},940882:(e,t,i)=>{i.d(t,{J:()=>s,Z:()=>n});const s=-1;function n(e){switch(e){case 0:return"shopping-bag";case 1:return"tag";default:return"search"}}},985913:(e,t,i)=>{i.d(t,{Z:()=>r});var s=i(858142);const n=/\{\{\s*(\w+)\s*\}\}/g,r=(e,t)=>(0,s.Z)(n,e,t)},858791:(e,t,i)=>{i.d(t,{Z:()=>s});const s=e=>e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/\"/g,"&quot;").replace(/\'/g,"&#39;")},858142:(e,t,i)=>{i.d(t,{Z:()=>s});const s=(e,t,i)=>t?t.replace(e,((e,t)=>i&&Object.prototype.hasOwnProperty.call(i,t)?i[t]:"")):""},66699:(e,t,i)=>{i.d(t,{Z:()=>r});var s=i(985913),n=i(858791);const r=(e,t)=>{const i={};return Object.keys(t).forEach((e=>{i[e]=t[e]?(0,n.Z)(t[e].toString()):""})),(0,s.Z)(e,i)}},867820:(e,t,i)=>{i.d(t,{yl:()=>h,an:()=>f,qJ:()=>m,dy:()=>w,De:()=>_,NC:()=>y,LW:()=>x,My:()=>b,tj:()=>g,hL:()=>v});var s=i(231486),n=i(6637),r=i(826067),o=i(226198);const a="unauthHistories",l="trackHistoryClickInternalUrl";var c=i(622096),d=i(53987);let p=[];let u;function h(e){p.length&&(n.ZP.create("UserRegisterTrackActionResource",{actions:p}).callUpdate({showError:!1,async:!e}),p=[],u=null)}const m=e=>{!function(e){const t=(0,c.qn)(l);if((0,c.L_)(l),t)return;let i=(0,c.qn)(a);if(i=i?i.split(","):[],i.length){const t=`${e}.${i.reduce(((e,t)=>e+"-"+t))}`;p.push({name:t,aux_data:{}})}(0,c.L_)(a)}(e),p.length&&h(!0)};function g(e,t){let i="undefined"!=typeof window&&window.encodeURIComponent&&encodeURIComponent(e)||e;t||(t={}),-1!==i.indexOf("%")&&(t.invalid_action&&(t.invalid_action_original=t.invalid_action),t.invalid_action=i,i="track_register_action.web.invalid_action.with_percent"),p.push({name:i,aux_data:t}),u||(u=setTimeout((()=>h()),5e3)),function(e,t){if("undefined"!=typeof window)try{const i=new URL(window.location.href).searchParams.get("consoleTra");if(window.PINTEREST_DEV_LOG||i){const i=window.PINTEREST_DEV_REGEX||"";i&&!(e||"").match(i)||("object"==typeof t&&Object.keys(t).length?console.log(e+": %O",t):console.log(e))}}catch(i){}}(e,t)}function v(e,t){g(e,{tags:{...t}})}function b(e){g(e,{tags:{}})}function y(e,t=!1){if("undefined"==typeof window)return;let i=(0,c.qn)(a);i=i?i.split(","):[],i.push(e),(0,c.Nh)(a,i.join()),b(`lex.${e}`),t&&(0,c.Nh)(l,!0)}const f=()=>{const e=(0,r.mB)(window.location.search);if("31"===e.utm_source)return"email";if(e.utm_pai)return"paid";const t=s.U2(o.tg)||document.referrer;return t?t.includes("/t.co/")?"twitter":t.includes("cdn.ampproject.org")?"amp":t.includes("google.")?"google":t.includes("bing.")?"bing":t.includes("facebook.")?"facebook":"other":"direct"},_=e=>{e.action&&e.event?(e.type=e.type||"other",e.trigger=e.trigger||"other",e.referrer=f(),v("pinner_conversion",e)):v("pinner_conversion.missing_tags")},x=e=>{const t=(i=e.pageLocation,(0,d.L6)(i)?"pin":(0,d.am)(i)?"board":(0,d.Xn)(i)?"login":(0,d.C$)(i)?"home":(0,d.cD)(i)?"profile":(0,d.J3)(i)?"ideas":(0,d.$Y)(i)?"article":(0,d.Zz)(i)?"today":(0,d.j8)(i)?"unauth-profile":"other");var i;const s=e.item||"none",n=e.within||"none";v(`logged_out_product.interaction.${t}.${e.action}`,{item:s,within:n})},w=e=>{v(`pinner_conversion.autologin.${e.provider}.${e.event}`)}},343341:(e,t,i)=>{i.d(t,{F9:()=>o,Zo:()=>n,nE:()=>r});var s=i(425288);const{Provider:n,Consumer:r,useHook:o}=(0,s.Z)("toastManagerContext")},829407:(e,t,i)=>{i.d(t,{Z:()=>n});var s=i(667294);const n=e=>{(0,s.useEffect)(e,[])}},19121:(e,t,i)=>{i.d(t,{$:()=>n,Z:()=>o});var s=i(425288);const{Provider:n,useHook:r}=(0,s.Z)("viewer"),o=r},802201:(e,t,i)=>{i.d(t,{AF:()=>a,S6:()=>l,_S:()=>c});var s=i(966338),n=i(425288),r=i(785893);const{Provider:o,useHook:a}=(0,n.Z)("Pins");function l(){const e=a();return t=>e[t]}function c({children:e}){const t=(0,s.useSelector)((({pins:e})=>e),s.shallowEqual);return(0,r.jsx)(o,{value:t,children:e})}},57636:(e,t,i)=>{i.d(t,{Z:()=>g});var s=i(667294),n=i(116303),r=i(63444),o=i(564194),a=i(391143),l=i(667976),c=i(66699),d=i(898781),p=i(19121),u=i(940882),h=i(883119),m=i(785893);function g({bubble:e,contextLogData:t,disableTabIndex:i,handleReport:g,height:v,imgSignature:b,isHovered:y,onClick:f,onMouseEnter:_,onMouseLeave:x,referringSource:w,searchBoxRenderStopwatch:T,showFlag:j,slotIndex:I,storyId:k,viewParameter:S,viewType:C,width:O}){const P=(0,d.ZP)(),E=(0,p.Z)(),{id:Z,action:L,cover_images:R,dominant_colors:M,identifier_icon_type:D,title:W,story_category:H,curator:A}=e,N=R&&R[0]?R[0]["280x280"]||R[0]["236x"]:void 0,F=(0,c.Z)(W&&W.format||"",W&&W.args||{}),z=M&&M.length?M[0]:"gray",X=(null==L?void 0:L.url)||(0,a.Z)({storyCategory:H,query:F,referringSource:w,bubbleId:Z,storyId:k});return(0,m.jsx)(o.Z,{impressionAuxFields:{storyCategory:H,storyIdStr:k},impressionType:"Article",loggingId:Z,viewType:C,viewParameter:S,slotIndex:I,contextLogData:{story_id:k,...t},children:(0,m.jsx)(r.Z,{backgroundColor:z,coverImage:N,disableTabIndex:i,height:v,id:Z,isHovered:y,onClick:f,onMouseEnter:_,onMouseLeave:x,searchBoxRenderStopwatch:T,url:X,width:O,children:({isHovered:e})=>(0,m.jsxs)(s.Fragment,{children:[A&&26!==H&&(0,m.jsx)(h.xu,{position:"absolute",top:!0,left:!0,padding:2,children:(0,m.jsx)(n.Z,{outline:!0,size:"xs",src:A.image_small_url,name:A.full_name})}),D&&D!==u.J&&(0,m.jsx)(h.xu,{alignItems:"center",color:"default",display:"flex",height:24,justifyContent:"center",left:!0,margin:2,opacity:.8,position:"absolute",rounding:"circle",top:!0,width:24,children:(0,m.jsx)(h.JO,{icon:(0,u.Z)(D),accessibilityLabel:P._('Shopping icon', 'bubble.shoppingIcon.label', 'Accessibility label for bubble shopping Icon'),color:"default",size:12})}),(0,m.jsx)(h.xu,{display:"flex",height:v,width:O||"100%",position:"absolute",top:!0,padding:3,alignItems:26===H?"end":"center",justifyContent:"center",children:(0,m.jsxs)(h.kC,{alignItems:"stretch",justifyContent:"start",direction:"column",children:[v>200?(0,m.jsx)(h.X6,{size:"500",align:"center",color:"light",children:F}):(0,m.jsx)(h.xv,{align:"center",color:"light",weight:"bold",children:F}),A&&26===H&&(0,m.jsxs)(h.xu,{display:"flex",justifyContent:"center",alignItems:"center",marginTop:4,children:[(0,m.jsx)(h.xu,{marginEnd:2,children:(0,m.jsx)(n.Z,{outline:!0,size:"xs",src:A.image_small_url,name:A.full_name})}),(0,m.jsx)(h.xv,{size:"100",color:"light",children:A.full_name})]})]})}),E.isAuth&&E.isEmployee&&j?(0,m.jsx)(h.xu,{position:"absolute",bottom:!0,right:!0,marginBottom:1,children:(0,m.jsx)(l.Z,{handleReport:g,imgSignature:b||"",isVisible:e})}):null]})})})}},63444:(e,t,i)=>{i.d(t,{Z:()=>a});var s=i(667294),n=i(883119),r=i(785893);const o={bubbleOverlay:{backgroundColor:"rgba(0, 0, 0, 0.4)"},hoverOverlay:{backgroundColor:"rgba(0, 0, 0, 0.6)"}};function a({backgroundColor:e,children:t,coverImage:i,disableTabIndex:a,height:l,id:c,isHovered:d,onClick:p,onMouseEnter:u,onMouseLeave:h,url:m,width:g,searchBoxRenderStopwatch:v}){var b,y;const[f,_]=(0,s.useState)(!1),x=()=>{u?u():_(!0)},w=()=>{h?h():_(!1)},T=d||f;return(0,r.jsx)(n.iP,{role:"link",href:m,onBlur:w,onMouseLeave:w,onFocus:x,onMouseEnter:x,onTap:()=>{null==p||p(c)},rounding:4,tabIndex:a?-1:void 0,children:(0,r.jsx)(n.zd,{rounding:4,width:g||"100%",height:l,children:null!=i&&i.url?(0,r.jsxs)(n.Ee,{alt:"",color:e,fit:"cover",naturalHeight:null!==(b=i.height)&&void 0!==b?b:1,naturalWidth:null!==(y=i.width)&&void 0!==y?y:1,onLoad:()=>{null==v||v.stop()},role:"presentation",src:i.url,children:[(0,r.jsx)(n.xu,{height:"100%",width:"100%",dangerouslySetInlineStyle:{__style:T?o.hoverOverlay:o.bubbleOverlay}}),"function"==typeof t?t({isHovered:T}):t]}):(0,r.jsx)(n.xu,{height:"100%",width:"100%",dangerouslySetInlineStyle:{__style:{backgroundColor:e}}})})})}},958155:(e,t,i)=>{i.d(t,{Z:()=>u});var s=i(667294);const n={backgroundColor:"transparent"},r={backgroundColor:"rgba(216, 216, 216, 0.37)"},o={borderRadius:"50%",display:"flex",alignItems:"center",justifyContent:"center"},a={outline:"0"};var l=i(883119),c=i(785893);function d(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}class p extends s.Component{constructor(...e){super(...e),d(this,"state",{hovered:!1}),d(this,"handleMouseEnter",(()=>this.setState({hovered:!0}))),d(this,"handleMouseLeave",(()=>this.setState({hovered:!1})))}render(){const{backgroundHaloSize:e,onClick:t,color:i="subtle"}=this.props,s=Object.freeze({height:e,width:e}),d={border:0,display:"block",background:"transparent",cursor:"pointer",...a},p={...s,...{...o,...n,...this.state.hovered?r:{}}};return(0,c.jsx)("button",{type:"button",style:d,onMouseEnter:this.handleMouseEnter,onMouseLeave:this.handleMouseLeave,onClick:e=>t&&t({event:e}),children:(0,c.jsx)("div",{style:p,children:(0,c.jsx)(l.xu,{rounding:"circle",children:(0,c.jsx)(l.JO,{accessibilityLabel:"",icon:"flag",size:e/2,color:i})})})})}}const u=p},667976:(e,t,i)=>{i.d(t,{Z:()=>g});var s=i(667294),n=i(958155),r=i(121151),o=i(6637),a=i(499128),l=i(844949),c=i(898781),d=i(343341),p=i(883119),u=i(785893);function h(e,t,i){return t in e?Object.defineProperty(e,t,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[t]=i,e}class m extends s.PureComponent{constructor(...e){var t;super(...e),t=this,h(this,"state",{showModal:!1,reportType:null}),h(this,"handleDismiss",(()=>this.setState({showModal:!1}))),h(this,"handleClick",(()=>{const{reportType:e}=this.state;"image"===e?this.reportSuggestionImage():this.reportSuggestionText()})),h(this,"reportSuggestionImage",(async function(){const{imgSignature:e,reportImage:i}=t.props;t.setState({showModal:!1});i((await o.ZP.create("GetPinFromSignature",{imgSignature:e}).callGet()).resource_response.data.id)})),h(this,"reportSuggestionText",(()=>{const{handleReport:e,toastManagerContext:t}=this.props;e&&(e(),t.showToast((({hideToast:e})=>(0,u.jsx)(a.ZP,{onHide:e,text:this.props.i18n._('Thanks\xA0for\xA0your\xA0report!\xA0This\xA0will\xA0be\xA0reviewed\xA0by\xA0our\xA0Trust\xA0and\xA0Safety\xA0Team', 'ReportingFlag.Toast.text', 'Toast\xA0after\xA0reporting\xA0a\xA0search suggestion')}))),this.handleDismiss())})),h(this,"showModal",(({event:e})=>{e.stopPropagation(),e.preventDefault(),this.setState({showModal:!0})}))}render(){const{showModal:e}=this.state;return(0,u.jsxs)(s.Fragment,{children:[this.props.isVisible&&(0,u.jsx)(n.Z,{onClick:this.showModal,backgroundHaloSize:24}),e&&(0,u.jsx)(r.ZP,{accessibilityModalLabel:this.props.i18n._('Report\xA0search\xA0term', 'ReportingFlag.Modal.accessibilityModalLabel', 'accessible\xA0label\xA0for\xA0report\xA0suggestion modal'),heading:this.props.i18n._('Report\xA0search\xA0term', 'ReportingFlag.Modal.heading', 'Heading\xA0for\xA0report\xA0suggestion modal'),onDismiss:this.handleDismiss,size:"sm",children:(0,u.jsxs)(p.xu,{children:[(0,u.jsx)(p.xu,{padding:5,children:(0,u.jsx)(p.xv,{children:this.props.i18n._('When you flag this, our Trust and Safety team will review it. If it doesn\'t meet our Community Guidelines, it will be blocked.', 'ReportingFlag.Box.Text.report', 'What\xA0will\xA0happen\xA0when\xA0you\xA0report\xA0a\xA0suggestion')})}),(0,u.jsxs)(p.xu,{role:"list",display:"flex",direction:"column",marginBottom:4,paddingX:5,children:[(0,u.jsxs)(p.xu,{alignItems:"center",paddingY:1,display:"flex",direction:"row",children:[(0,u.jsx)(p.EU,{checked:"text"===this.state.reportType,id:"textType",onChange:()=>this.setState({reportType:"text"}),value:"Report search text"}),(0,u.jsx)(p.xu,{flex:"grow",children:(0,u.jsx)(p.__,{htmlFor:"textType",children:(0,u.jsx)(p.xu,{paddingX:2,children:(0,u.jsx)(p.xv,{children:"Report search text"})})})})]}),(0,u.jsxs)(p.xu,{alignItems:"center",paddingY:1,display:"flex",direction:"row",children:[(0,u.jsx)(p.EU,{checked:"image"===this.state.reportType,id:"imageType",onChange:()=>this.setState({reportType:"image"}),value:"Report search image"}),(0,u.jsx)(p.xu,{flex:"grow",children:(0,u.jsx)(p.__,{htmlFor:"imageType",children:(0,u.jsx)(p.xu,{paddingX:2,children:(0,u.jsx)(p.xv,{children:"Report search image"})})})})]})]}),(0,u.jsx)(p.iz,{}),(0,u.jsxs)(p.xu,{display:"flex",justifyContent:"end",padding:2,children:[(0,u.jsx)(p.xu,{margin:2,children:(0,u.jsx)(p.zx,{fullWidth:!0,onClick:this.handleDismiss,text:this.props.i18n._('Cancel', 'ReportingFlag.Box.Button.text.cancel', 'Text\xA0for\xA0cancel\xA0button\xA0when reporting search suggestion')})}),(0,u.jsx)(p.xu,{margin:2,children:(0,u.jsx)(p.zx,{fullWidth:!0,color:"red",onClick:this.handleClick,text:this.props.i18n._('Report', 'ReportingFlag.Box.Button.text.report', 'Button\xA0label\xA0to\xA0report\xA0search suggestion'),disabled:!this.state.reportType})})]})]})})]})}}function g(e){const t=(0,c.ZP)(),{reportImage:i}=(0,l.f)();return(0,u.jsx)(m,{...e,i18n:t,reportImage:i,toastManagerContext:(0,d.F9)()})}},844949:(e,t,i)=>{i.d(t,{X:()=>d,f:()=>c});var s=i(667294);function n(e=null,t){switch(t.type){case"REPORT_CONTENT_SHOW":return{id:t.payload.id,isProduct:t.payload.isProduct,isPromoted:t.payload.isPromoted,videoDuration:t.payload.videoDuration,viewParameter:t.payload.viewParameter,viewType:t.payload.viewType,type:t.payload.type};case"REPORT_CONTENT_DISMISS":return null;default:return e}}var r=i(425288),o=i(623568),a=i(785893);const{Provider:l,useHook:c}=(0,r.Z)("ReportData");function d({children:e}){const[t,i]=(0,s.useReducer)(n,null),r=(0,s.useCallback)((()=>i({type:"REPORT_CONTENT_DISMISS"})),[]),c=(0,s.useCallback)(((e,t,s)=>i({type:"REPORT_CONTENT_SHOW",payload:{id:e,isProduct:!1,isPromoted:!1,videoDuration:null,viewParameter:t,viewType:s,type:"aggregatedComment"}})),[]),d=(0,s.useCallback)(((e,t,s)=>i({type:"REPORT_CONTENT_SHOW",payload:{id:e,isProduct:!1,isPromoted:!1,videoDuration:null,viewParameter:t,viewType:s,type:"pin"}})),[]),p=(0,s.useCallback)(((e,t,s)=>{const{id:n,videos:r}=e,a=(0,o.VX)(e),l=(0,o.jL)(e);let c;if((0,o.iR)(r)&&r){const{video_list:e={}}=r,t=e[Object.keys(e)[0]];c=t&&t.duration}i({type:"REPORT_CONTENT_SHOW",payload:{id:n,isProduct:a,isPromoted:l,videoDuration:c,viewParameter:t,viewType:s,type:"pin"}})}),[]),u=(0,s.useMemo)((()=>({reportData:t,dismiss:r,reportComment:c,reportImage:d,reportPin:p})),[t,r,c,d,p]);return(0,a.jsx)(l,{value:u,children:e})}},395164:(e,t,i)=>{i.d(t,{T:()=>o,Z:()=>a});var s=i(226198),n=i(314880);const r=[];function o(e){let t;try{t=JSON.stringify({errorObj:e})}catch(l){t=JSON.stringify({errorObj:{message:e.message,name:"logToServer stringify exception"}})}const i=(o={report_context:JSON.stringify({current_url:window.location.href,client_version:"b7d0677"}),report_data:t},Object.keys(o).map((e=>e+"="+encodeURIComponent(o[e]))).join("&"));var o;const a=window.btoa(i);if(-1===r.indexOf(a)){const e=new XMLHttpRequest;e.open("post","/_/_/logClientError/",!0),e.setRequestHeader("Content-type","application/x-www-form-urlencoded");const t=(0,n.H)();t&&e.setRequestHeader("X-Pinterest-PWS-Handler",t),e.setRequestHeader("X-CSRFToken",function(e){const t=("; "+document.cookie).split("; "+e.name+"=");return 2===t.length?t.pop().split(";").shift():""}(s.fS)),e.send(i),r.push(a)}r.length>100&&r.shift()}function a(){window.addEventListener("error",(e=>{const t=e.error||{};o({name:t.name,message:t.message||e.message,stack:t.stack,filename:e.filename,line:e.lineno,column:e.colno})})),window.addEventListener("unhandledrejection",(e=>{var t,i,s,n,r;if(!((null==e?void 0:e.reason)instanceof Error))return;const{reason:a}=e,l="string"==typeof(null==a?void 0:a.message)?a.message:String(a);o({name:null!==(t=null==a?void 0:a.name)&&void 0!==t?t:"unhandledrejection",message:l,message_detail:null==a?void 0:a.message_detail,original_message:null==a?void 0:a.original_message,stack:null==a?void 0:a.stack,filename:null==a?void 0:a.fileName,line:null!==(i=null!==(s=null==a?void 0:a.lineno)&&void 0!==s?s:null==a?void 0:a.line)&&void 0!==i?i:null==a?void 0:a.lineNumber,column:null!==(n=null!==(r=null==a?void 0:a.column)&&void 0!==r?r:null==a?void 0:a.colno)&&void 0!==n?n:null==a?void 0:a.columnNumber})}))}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/18594-9167259ce6b25b68.mjs.map