(self.__LOADABLE_LOADED_CHUNKS__=self.__LOADABLE_LOADED_CHUNKS__||[]).push([[48950],{829932:e=>{e.exports=function(e,t){for(var r=-1,i=null==e?0:e.length,n=Array(i);++r<i;)n[r]=t(e[r],r,e);return n}},880531:(e,t,r)=>{var i=r(562705),n=r(829932),o=r(701469),s=r(733448),a=i?i.prototype:void 0,c=a?a.toString:void 0;e.exports=function e(t){if("string"==typeof t)return t;if(o(t))return n(t,e)+"";if(s(t))return c?c.call(t):"";var r=t+"";return"0"==r&&1/t==-Infinity?"-0":r}},479833:(e,t,r)=>{var i=r(880531);e.exports=function(e){return null==e?"":i(e)}},17314:(e,t,r)=>{r.d(t,{Z:()=>u});var i,n,o=r(813653),s=r(861470),a=0,c=0;const u=function(e,t,r){var u=t&&r||0,d=t||new Array(16),p=(e=e||{}).node||i,l=void 0!==e.clockseq?e.clockseq:n;if(null==p||null==l){var _=e.random||(e.rng||o.Z)();null==p&&(p=i=[1|_[0],_[1],_[2],_[3],_[4],_[5]]),null==l&&(l=n=16383&(_[6]<<8|_[7]))}var h=void 0!==e.msecs?e.msecs:Date.now(),m=void 0!==e.nsecs?e.nsecs:c+1,E=h-a+(m-c)/1e4;if(E<0&&void 0===e.clockseq&&(l=l+1&16383),(E<0||h>a)&&void 0===e.nsecs&&(m=0),m>=1e4)throw new Error("uuid.v1(): Can't create more than 10M uuids/sec");a=h,c=m,n=l;var g=(1e4*(268435455&(h+=122192928e5))+m)%4294967296;d[u++]=g>>>24&255,d[u++]=g>>>16&255,d[u++]=g>>>8&255,d[u++]=255&g;var f=h/4294967296*1e4&268435455;d[u++]=f>>>8&255,d[u++]=255&f,d[u++]=f>>>24&15|16,d[u++]=f>>>16&255,d[u++]=l>>>8|128,d[u++]=255&l;for(var v=0;v<6;++v)d[u+v]=p[v];return t||(0,s.Z)(d)}},582998:(e,t,r)=>{r.d(t,{K:()=>a});var i=r(59439),n=r(896625),o=r(584467);let s=null;const a={fromGlobalContext:function(){if(s)return s;const e=(0,o.Z)({context:n.Z.instance,...(0,i.Z)(n.Z.instance)});var t;return t=n.Z.instance,0!==Object.keys(t).length&&(s=e),e}}},558068:(e,t,r)=>{r.d(t,{H:()=>c,n:()=>p});var i=r(667294),n=r(425288),o=r(925927),s=r(785893);const{Provider:a,useHook:c}=(0,n.Z)("HistoryStackContext",{previous:[],current:null,forward:[]}),u=e=>e&&e.pathname?e.pathname+(e.search||""):"";function d(e,t){var r;const i={action:t.type,location:t.location,match:t.match};if(t.location===(null===(r=e.current)||void 0===r?void 0:r.location))return e;switch(t.type){case"POP":return e.forward.length>0&&u(e.forward[0].location)===u(i.location)?{...e,forward:e.forward.slice(1),current:{...e.forward[0],action:t.type},previous:e.current?[...e.previous,{action:e.current.action,location:e.current.location,match:e.current.match}]:e.previous}:{...e,forward:e.current?[{action:e.current.action,location:e.current.location,match:e.current.match},...e.forward]:e.forward,current:{...e.previous.slice(-1)[0],action:t.type},previous:e.previous.slice(0,-1)};case"PUSH":return{...e,forward:e.forward.length>0?[]:e.forward,current:i,previous:e.current?[...e.previous,{action:e.current.action,location:e.current.location,match:e.current.match}]:e.previous};case"REPLACE":return{...e,current:i};default:return e}}function p({children:e}){const t=(0,o.k6)(),r=(0,o.TH)(),n=(0,o.$B)(),c={forward:[],current:{action:t.action,location:r,match:n},previous:[]},[u,p]=(0,i.useReducer)(d,c);return(0,i.useEffect)((()=>{const{action:e}=t;p({type:e,location:r,match:n})}),[r]),(0,s.jsx)(a,{value:u,children:e})}},619937:(e,t,r)=>{r.d(t,{$N:()=>R,GY:()=>f,MZ:()=>m,NR:()=>T,Vn:()=>v,fm:()=>i,kM:()=>o,q6:()=>n,qp:()=>g,uV:()=>P,vJ:()=>E});const i={DOWNLOAD_TEMPLATE:"DOWNLOAD_TEMPLATE",UPLOAD_TEMPLATE:"UPLOAD_TEMPLATE",HISTORY:"HISTORY",RESOURCES:"RESOURCES"},n={GENERAL:"GENERAL",CAMPAIGNS:"CAMPAIGNS",AD_GROUPS:"AD_GROUPS",ADS:"ADS",KEYWORDS:"KEYWORDS",PRODUCT_GROUPS:"PRODUCT_GROUPS",ERROR_CODES:"ERROR_CODES"},o={BILLING_HISTORY:"BILLING_HISTORY",BILLING_FORMS:"BILLING_FORMS",ORDER_LINES:"ORDER_LINES",PROMOTIONS:"PROMOTIONS",DOCUMENTS:"DOCUMENTS"},s="Shopify",a="WordPress",c="WooCommerce",u="Weebly",d="Tealium",p="Magento",l="Squarespace",_="Ecwid",h="Bigcommerce",m={GOOGLE_TAG_MANAGER:"Google Tag Manager",SHOPIFY:"Shopify",WOO_COMMERCE:"WooCommerce",WORDPRESS:"WordPress",SQUARESPACE:"Squarespace",WEEBLY:"Weebly",TEALIUM:"Tealium",MAGENTO:"Magento",ECWID:"Ecwid",BIG_COMMERCE:"BigCommerce"},E={["Google Tag Manager"]:m.GOOGLE_TAG_MANAGER,[s]:m.SHOPIFY,[c]:m.WOO_COMMERCE,[a]:m.WORDPRESS,[l]:m.SQUARESPACE,[u]:m.WEEBLY,[d]:m.TEALIUM,[p]:m.MAGENTO,[_]:m.ECWID,[h]:m.BIG_COMMERCE},g={PINTEREST_TAG:"PINTEREST_TAG",PINTEREST_TAG_EVENTS:"PINTEREST_TAG_EVENTS",PINTEREST_TAG_HISTORY:"PINTEREST_TAG_HISTORY",PINTEREST_TAG_HEALTH:"PINTEREST_TAG_HEALTH",CONVERSION_UPLOAD:"CONVERSION_UPLOAD",UPLOAD_HISTORY:"UPLOAD_HISTORY",PCA_UPLOAD_HISTORY:"PCA_UPLOAD_HISTORY",PCA_UPLOAD:"PCA_UPLOAD"},f={PINTEREST_TAG_DASHBOARD:"PINTEREST_TAG_DASHBOARD",PINTEREST_TAG_LANDING:"PINTEREST_TAG_LANDING",PINTEREST_TAG_INSTRUCTIONS:"PINTEREST_TAG_INSTRUCTIONS",PINTEREST_TAG_HISTORY:"PINTEREST_TAG_HISTORY",CONVERSION_UPLOAD_LANDING:"CONVERSION_UPLOAD_LANDING",CONVERSION_UPLOAD_VALIDATION:"CONVERSION_UPLOAD_VALIDATION",CONVERSION_UPLOAD_HISTORY:"CONVERSION_UPLOAD_HISTORY",PCA_UPLOAD_HISTORY:"PCA_UPLOAD_HISTORY",PCA_UPLOAD_LANDING:"PCA_UPLOAD_LANDING",PCA_UPLOAD_VALIDATION:"PCA_UPLOAD_VALIDATION"},v={UNREAD:"UNREAD",READ:"READ",ACCEPTED:"ACCEPTED",REJECTED:"REJECTED",DISMISSED:"DISMISSED",INVALID:"INVALID",MUTED:"MUTED",SNOOZED:"SNOOZED",PMP_REPORTED:"PMP_REPORTED",EMAILED:"EMAILED",BULK_DOWNLOADED:"BULK_DOWNLOADED",FILTERED:"FILTERED",PUSHED:"PUSHED"},T={ATTRIBUTION_DESTINATION:"destination",ATTRIBUTION_EXPIRY:"expiry",ATTRIBUTION_SOURCE:"attributionsrc",ATTRIBUTION_SOURCE_EVENT_ID:"source_event_id"},P=604800,R={ATTRIBUTION_SOURCE_ID:"attributionsourceid",ATTRIBUTE_DESTINATION:"attributiondestination",ATTRIBUTE_ON:"attributeon"}},768559:(e,t,r)=>{r.d(t,{Z:()=>a});var i=r(826067);const n=/\/today\/(article|best|trending)\/[\w-]+\/(\d+)/,o=(e,t)=>t?e.substring(t.length).split("/")[0]:e,s=(e,t,r,s)=>{var a;if(!e)return"";let c="";const u=t.board&&t.board.url;switch(e){case"/":case"/homefeed/":return"UserHomefeedResource";case t.pinner&&`/${t.pinner.username}/pins/`:return"UserPinsResource";case t.pinner&&`/${t.pinner.username}/`:case/\/_activity\//.test(e)&&e:return"UserActivityPinsResource";case/\/_created\//.test(e)&&e:return t.story_pin_data_id?"UserStoryPinsFeedResource":"UserActivityPinsResource";case/\/_community\//.test(e)&&e:return"UserDiscoveredPinsResource";case/\/_shop\//.test(e)&&e:return"StoreFrontFeedResource";case/\/_saved\//.test(e)&&e:return"BoardlessPinsResource";case t.pinner&&`/${t.pinner.username}/_shopping_list/`:return"ShoppingListFeedResource";case/\/visual-search\//.test(e)&&e:return"VisualLiveSearchResource";case/\/pin\//.test(e)&&e:c="/pin/";const d=o(e,c);if(t.id!==d)return t.call_to_create_source_pin_id?`ApiResource_callToCreatePins_${d}`:`RelatedPinFeedResource_${d}`;break;case/\/search\//.test(e)&&e:if(r){return`SearchResource_${((0,i.mB)(r,{shouldDecode:!1}).q||"").toLowerCase()}`}if(s)return`SearchResource_${encodeURIComponent(s.q||"").toLowerCase()}`;break;case/\/discover\/article\//.test(e)&&e:c="/discover/article/";return`ExploreArticleResource_${o(e,c)}`;case/\/categories\//.test(e)&&e:c="/categories/";return`CategoryFeedResource_${o(e,c)}`;case/\/discover\/topics\//.test(e)&&e:return"CategoryFeedResource";case/\/news_hub\//.test(e)&&e:c="/news_hub/";return`NewsHubDetailsResource_${o(e,c)}`;case/\/_tools\/more-ideas\//.test(e)&&e:return"BoardContentRecommendationResource";case/\/topics\//.test(e)&&e:c="/topics/";return`TopicFeedResource_${o(e,c)}`;case t.pinner&&`/${t.pinner.username}/products/`:return"StoreFrontFeedResource";case/\/source\//.test(e)&&e:c="/source/";return`DomainFeedResource_${o(e,c)}`;case/\/explore\//.test(e)&&e:c="/explore/";return`SearchResource_${o(e,c)}`;case u:case!!u&&/\/more_ideas\//.test(e)&&e:return"BoardFeedResource";case u&&e.indexOf(u)>-1&&e:return"BoardSectionPinsResource";case/\/following\//.test(e)&&e:return"FollowingFeedResource";case/\/brand_catalog\//.test(e)&&e:return"BrandCatalogFeedResource";case n.test(e)&&e:return`TodayArticleFeedResource_${(null===(a=e.match(n))||void 0===a?void 0:a[2])||"unknown"}`;case/\/today\//.test(e):return"TodayTabResource";case/\story_feed\//.test(e)&&e:if(r){const{feed_type:e,request_params:t}=(0,i.mB)(r);return`StoryFeedResource_${e}_${t}`}break;case/\/your-shop\//.test(e)&&e:return"PersonalBoutiqueResource"}return""},a=(e,t,r)=>{if(!e||!e.tracking_params||!t)return;if(!e.tracking_params_map)return`${e.tracking_params}~0`;const{pathname:i,search:n,query:o}=t,a=s(i,e,n,o),c=e.tracking_params_map||{},u=Object.keys(c);let d;if((i||"").startsWith("/pin/")){const e=u.find((e=>"PinResource"!==e));d=e?c[e]:c.PinResource}else d=c[a];let p;if(!d&&r&&r.length){const t=(e=>{let t=null==e?void 0:e.pathname;return t?(t.match(/\/search\//)&&null!=e&&e.search&&(t+=e.search),t.toLowerCase()):""})(r[r.length-1].location);p=s(t,e,n,o),d=c[p]}return d||(d=`${e.tracking_params||""}~0`),d}},425288:(e,t,r)=>{r.d(t,{Z:()=>s});var i=r(667294),n=r(785893);function o(e,t){let r=e.slice(1);if(r=r.endsWith("Context")?r:`${r}Context`,t){return{hocDisplayName:`with${e[0].toUpperCase()}${r}(${t})`}}return{propsDisplayName:`${e[0].toLowerCase()}${r}`,messageDisplayName:`${e[0].toUpperCase()}${r}`}}function s(e,t){const r=(0,i.createContext)(t),{propsDisplayName:s,messageDisplayName:a}=o(e);r.displayName=a;const c=r.Provider,u=({children:e})=>{const t=(0,i.useContext)(r);if(void 0===t)throw new Error(`${a}Consumer must be used within a ${a}Provider.`);return e(t)},d=()=>(0,i.useContext)(r);function p(t){const{hocDisplayName:r}=o(e,String(t.displayName||t.name)),i=e=>(0,n.jsx)(u,{children:i=>{if(void 0===i)throw new Error(`${r} must be used within a ${a}Provider.`);if(e[s])throw new Error("Parent Component and Context are passing to the component the same variables.");const o={[s]:i};return(0,n.jsx)(t,{...e,...o})}});return i.displayName=r,i}return c.displayName=`${a}Provider`,u.displayName=`${a}Consumer`,p.displayName=`${a}HOC`,{Provider:c,Consumer:u,MaybeConsumer:({children:e})=>e((0,i.useContext)(r)),useMaybeHook:d,useHook:function(){const e=d();if(void 0===e)throw new Error(`use${a} must be used within a ${a}Provider.`);return e},deprecatedHOC:p}}},620707:(e,t,r)=>{function i(e,t){if("object"==typeof e&&"object"==typeof t){const r=Object.keys(e),i=Object.keys(t);return r.length===i.length&&r.every((r=>e[r]===t[r]))}return e===t}r.d(t,{Ak:()=>i,_Y:()=>n,qe:()=>a,xZ:()=>s});const n=(e,t)=>e.length===t.length&&e.every(((e,r)=>i(e,t[r]))),o=(e,t)=>e.length===t.length&&e.every(((e,r)=>e===t[r])),s=(e,t=o)=>r=>{const i=[];return function(...n){const o=this,s=i.find((e=>e.context===o&&t(e.args,n)));if(s)return s.result;const a={context:o,args:n,result:r.apply(this,n)};return i.push(a),e&&i.length>e&&i.shift(),a.result}},a=s(1);s()},23799:(e,t,r)=>{r.d(t,{Z:()=>s});var i=r(479218),n=r(6637),o=r(466225);class s extends class{constructor(e={},t={},r=!1){var i,n,o;o=!1,(n="useBatching")in(i=this)?Object.defineProperty(i,n,{value:o,enumerable:!0,configurable:!0,writable:!0}):i[n]=o,this.active=e,this.triggerable=t,this.useBatching=r}flush(){}updateExperimentsCache(e,t){this.active=e,this.triggerable=t}v2GetGroup(e){let t=this.active[e];return void 0===t&&(t=this.triggerable[e]),t||null}v2InGroup(e,t){const r=this.v2GetGroup(e);return"string"==typeof t&&(t=[t]),!!r&&-1!==t.indexOf(r)}v2ActivateExperiment(e){throw new Error("Method must be implemented by subclass.")}v2LogExperimentGroupOverride(e,t){throw new Error("Method must be implemented by subclass.")}checkExperiment(e,t){null!=t&&t.dangerouslySkipActivation||this.v2ActivateExperiment(e);const r=this.v2GetGroup(e)||"";return{anyEnabled:(0,o.Z)(r),group:r}}}{v2ActivateExperiment(e){return this._getGroupForExperiment(e,!0)}flush(){this._queuedResource&&this._queuedResource.flush()}v2LogExperimentGroupOverride(e,t){this._reportExperimentActivated(e,!1,t,t)}_getGroupForExperiment(e,t,r){void 0===t&&(t=!0);let i=this.active[e];return void 0===i&&t&&(i=this.triggerable[e],void 0!==i&&(this.active[e]=i,this._reportExperimentActivated(e,r,i))),i||null}_reportExperimentActivated(e,t,r,o){const s={add_to_experiment:!!t,experiment_name:e};if(o&&(s.override_group=o),r&&(s.experiment_group=r),this.useBatching)this._queuedResource||(this._queuedResource=new i.Z("ActivateExperimentResource",(e=>({experiments:e})))),this._queuedResource.enqueue(s);else{n.ZP.create("ActivateExperimentResource",s).callCreate({showError:!1})}}}},59439:(e,t,r)=>{r.d(t,{Z:()=>n});var i=r(125203);function n(e){e||(e={});const{active_experiments:t,triggerable_experiments:r,batch_exp:n}=e;return{experiments:new i.Z(t,r,n)}}},125203:(e,t,r)=>{r.d(t,{Z:()=>i});const i=r(23799).Z},780280:(e,t,r)=>{r.d(t,{B:()=>d,LC:()=>c,P2:()=>a,fH:()=>u,gf:()=>p});var i=r(667294),n=r(620707),o=r(785893);const s=(0,i.createContext)();function a({children:e,value:t}){const[r,a]=(0,i.useState)(t),c=(0,i.useMemo)((()=>({requestContext:r,updateRequestContext:e=>{const t={...r,...e};(0,n.Ak)(r,e)||a(t)}})),[r]);return(0,o.jsx)(s.Provider,{value:c,children:e})}const c=({children:e})=>{const t=(0,i.useContext)(s);if(!t)throw new Error("RequestContextConsumer must be used within a RequestContextProvider");return e(t.requestContext)},u=({children:e})=>{const t=(0,i.useContext)(s);if(!t)throw new Error("RequestContextConsumer must be used within a RequestContextProvider");return e(t.requestContext)};function d(){const e=(0,i.useContext)(s);if(!e)throw new Error("useRequestContext must be used within a RequestContextProvider");return e.requestContext}function p(){const e=(0,i.useContext)(s);if(!e)throw new Error("useUpdateRequestContext must be used within a RequestContextProvider");return e.updateRequestContext}},584467:(e,t,r)=>{function i(e){const{context:t,context:{user:r={}}}=e;return{advertiser:t.advertiser?t.advertiser:null,country:t.country,countryFromHostName:t.country_from_hostname,countryFromIp:t.country_from_ip,deepLink:t.deep_link,experiments:e.experiments,fullPath:t.full_path,isAmp:!1,isAuthenticated:t.is_authenticated,isBot:"true"===t.is_bot,isInternalIP:t.is_internal_ip,isManagedAdvertiser:t.is_managed_advertiser,isRTL:"rtl"===t.text_direction,isSocialBot:!!t.social_bot,language:t.language,legacyAdvertiser:null,locale:t.locale,loginState:r.login_state||void 0,origin:t.origin,regionFromIp:t.region_from_ip,requestIdentifier:t.request_identifier,sterlingOnSteroidsLdap:t.sterling_on_steroids_ldap,unauthId:t.unauth_id,userAgent:{browserName:t.browser_name,browserVersion:t.browser_version,canUseNativeApp:t.user_agent_can_use_native_app,isTablet:t.is_tablet_agent,isMobile:t.is_mobile_agent,platform:t.user_agent_platform,platformVersion:t.user_agent_platform_version&&3===t.user_agent_platform_version.length?t.user_agent_platform_version:[0,0,0],raw:t.user_agent}}}r.d(t,{Z:()=>i})},505920:(e,t,r)=>{r.d(t,{UZ:()=>u,Z8:()=>d});var i=r(667294),n=(r(966338),r(6637)),o=r(425288),s=r(785893);const{Provider:a,useHook:c}=(0,o.Z)("ResourceContext");function u({children:e}){const[t,r]=(0,i.useReducer)(((e,t)=>{var r;switch(t.type){case"addListener":const i=[...null!==(r=e[t.payload.name])&&void 0!==r?r:[],t.payload.handler];return{...e,[t.payload.name]:i};case"removeListener":if(!e[t.payload.name])return e;const n=e[t.payload.name].filter((e=>e!==t.payload.handler));return{...e,[t.payload.name]:n};default:return e}}),{});n.ZP.fetchCompleteCallback=({resource:e,options:r,response:i,normalizedResponse:n,refresh:o,resourceSchema:s})=>{t[e]&&t[e].forEach((t=>t({isRefresh:o,normalizedResponse:n,options:r,schema:s,resource:e,response:i})))};const o=(0,i.useMemo)((()=>({listenerDispatch:r})),[]);return(0,s.jsx)(a,{value:o,children:e})}function d(e,t){const{listenerDispatch:r}=c();(0,i.useEffect)((()=>(r({type:"addListener",payload:{name:e,handler:t}}),()=>{r({type:"removeListener",payload:{name:e,handler:t}})})))}},813171:(e,t,r)=>{r.d(t,{Z:()=>i});class i extends Error{constructor(...e){var t,r,i;super(...e),i="ServerResourceError",(r="name")in(t=this)?Object.defineProperty(t,r,{value:i,enumerable:!0,configurable:!0,writable:!0}):t[r]=i}static fromPlainObject(e,t){const r=new i;return e.message&&(r.message=e.message),e.message_detail&&(r.message_detail=e.message_detail),e.original_message&&(r.original_message=e.original_message),e.code&&(r.code=e.code),e.http_status&&(r.http_status=e.http_status),e.api_error_code&&(r.api_error_code=e.api_error_code),e.stack_trace&&(r.stack_trace=e.stack_trace),e.extra_data&&(r.extra_data=e.extra_data),e.request_identifier&&(r.request_identifier=e.request_identifier),t&&(r.data=t),r}toString(){return"["+this.name+"] "+JSON.stringify({name:this.name,code:this.code,http_status:this.http_status,api_error_code:this.api_error_code,stack_trace:this.stack_trace,extra_data:this.extra_data,request_identifier:this.request_identifier})}}},433780:(e,t,r)=>{r.d(t,{Z:()=>u});var i=r(172071),n=r(245474);function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}const s="ACTIVE",a="PAUSED",c=()=>window&&window.performance&&window.performance.now?`(Time: ${(window.performance.now()/1e3).toFixed(3)}s)`:"",u=({flushEvents:e,shouldShowLogStatements:t=!1,track:r})=>{const u=new Map,d=t?console:{error:(...e)=>{},log:(...e)=>{},group:(...e)=>{},groupEnd:(...e)=>{}};console.group||(d.group=(...e)=>console.log(...e),d.groupEnd=(...e)=>{});return new class{constructor(){o(this,"appTimedPair",null),o(this,"clickthroughProperties",null),o(this,"historyStackContext",null),o(this,"offsiteTimedPair",null),o(this,"offsiteTimedPairForegroundId",null),o(this,"addEventListeners",(()=>{let e,t;"undefined"!==document.hidden?(e="hidden",t="visibilitychange"):"undefined"!==document.msHidden?(e="msHidden",t="msvisibilitychange"):"undefined"!==document.webkitHidden&&(e="webkitHidden",t="webkitvisibilitychange");const r=t=>{document[e]?this.unregisterApp(!1,void 0,t):document.hasFocus()&&this.registerApp()};t&&document.addEventListener(t,r,!1),window.addEventListener("focus",this.registerApp),window.addEventListener("blur",(e=>this.unregisterApp(!1,void 0,e)));const n=(e=>{let t=!1;return(...r)=>{t||(t=!0,e(...r))}})((e=>this.unregisterApp(!0,void 0,e)));window.addEventListener("beforeunload",n),window.addEventListener("pagehide",n);const o=navigator&&navigator.userAgent.toLowerCase();o&&o.includes("macintosh")&&o.includes("chrome")&&window.addEventListener("popstate",(t=>{document.hasFocus()||document[e]||i.Z.increment("chrome_mac_back_forward_button",1)}))})),o(this,"storeClickthroughProperties",(e=>{this.clickthroughProperties&&i.Z.increment("webapp.metrics.clickthroughs.overwritten",1,{previousView:this.clickthroughProperties.view_type,previousViewParameter:this.clickthroughProperties.view_parameter,nextView:e.view_type,nextViewParameter:e.view_parameter}),this.clickthroughProperties=e})),o(this,"clearClickthroughProperties",(()=>{this.clickthroughProperties=null,this.offsiteTimedPair=null,this.offsiteTimedPairForegroundId=null})),o(this,"registerApp",(()=>{d.group("App Foreground",c()),null==this.appTimedPair?(this.appTimedPair=new n.Z,this.appTimedPair.start(),this._unpauseAllComponents(),this._endOffsiteTimedPair(),null!==this.appTimedPair&&void 0!==this.appTimedPair&&r({event_type:4700,pair_id:this.appTimedPair.uuid},this.historyStackContext)):d.error("TimedPair already exists for app."),d.groupEnd()})),o(this,"unregisterApp",((t=!1,i=!1,n)=>{d.group("App Background",c());const o=this.appTimedPair;if(null!=o){this._pauseAllComponents();const e=o.end();this._startOffsiteTimedPair(),r({event_type:4701,duration_ns:e,pair_id:o.uuid},this.historyStackContext),this.appTimedPair=null}else d.error("No TimedPair found for app.");const s=["beforeunload","pagehide"],a=s.includes(null==n?void 0:n.type),u=s.includes(null==n?void 0:n.pauseReason);(a||u)&&this._endOffsiteTimedPair(),i||e(null!=t&&t,void 0,n),d.groupEnd()})),o(this,"_activateComponent",(e=>{d.group("Activating component",c()),t&&d.log(e.getContext());const i=e.getTimedPair();if(i){i.start();const{view:t,viewParameter:n,component:o,element:s,objectId:a,clientTrackingParams:c}=e.getLoggerContext();r({event_type:4702,view_type:t,view_parameter:n,component:o,element:s,object_id_str:a,view_data:e.props.viewData,pair_id:i.uuid,clientTrackingParams:c,aux_data:{time_spent_foreground_pairid:this.appTimedPair&&this.appTimedPair.uuid,time_spent_parent_pairid:e.getParentId(),...e.props.auxData}},this.historyStackContext)}d.groupEnd()})),o(this,"_deactivateComponent",(e=>{d.group("Deactivating component",c()),t&&d.log(e.getContext());const i=e.getTimedPair();if(i){const{view:t,viewParameter:n,component:o,element:s,objectId:a,clientTrackingParams:c}=i,u=i.end();r({event_type:4703,view_type:t,view_parameter:n,component:o,element:s,object_id_str:a,view_data:e.props.viewData,duration_ns:u,pair_id:i.uuid,clientTrackingParams:c,aux_data:{time_spent_foreground_pairid:this.appTimedPair&&this.appTimedPair.uuid,time_spent_parent_pairid:e.getParentId(),...e.props.auxData}},this.historyStackContext)}d.groupEnd()})),o(this,"_startOffsiteTimedPair",(()=>{const{clickthroughProperties:e}=this;e&&(this.offsiteTimedPair=new n.Z({...e,view:186,viewParameter:e.view_parameter,objectId:e.object_id_str}),this.offsiteTimedPair.start(),this.offsiteTimedPairForegroundId=this.appTimedPair?this.appTimedPair.uuid:null,r({...e,event_type:4702,view_type:186,pair_id:this.offsiteTimedPair?this.offsiteTimedPair.uuid:null,aux_data:{...e.aux_data,time_spent_foreground_pairid:this.offsiteTimedPairForegroundId}},this.historyStackContext))})),o(this,"_endOffsiteTimedPair",(()=>{const{offsiteTimedPair:e,clickthroughProperties:t}=this;if(e&&t){const i=e.end();r({...t,event_type:4703,view_type:186,pair_id:this.offsiteTimedPair?this.offsiteTimedPair.uuid:null,aux_data:{...t.aux_data,time_spent_foreground_pairid:this.offsiteTimedPairForegroundId},duration_ns:i},this.historyStackContext),this.clearClickthroughProperties()}})),o(this,"_pauseAllComponents",(()=>{d.group("Pause all components"),u.forEach(((e,t,r)=>{e===s&&this._deactivateComponent(t),r.set(t,a)})),d.groupEnd()})),o(this,"_unpauseAllComponents",(()=>{d.group("Unpause all components"),u.forEach(((e,t)=>{t.setTimedPair(new n.Z(t.getLoggerContext()))})),u.forEach(((e,t)=>{u.set(t,s),this._activateComponent(t)})),d.groupEnd()}))}setHistoryStackContext(e){this.historyStackContext=e}registerComponent(e){null===this.appTimedPair?u.set(e,a):(u.set(e,s),this._activateComponent(e))}unregisterComponent(e){u.get(e)===s&&(this._deactivateComponent(e),e.setTimedPair(new n.Z(e.getLoggerContext()))),u.delete(e)}size(){return u.size}}}},245474:(e,t,r)=>{r.d(t,{Z:()=>a});var i=r(172045),n=r(17314);function o(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}const s="undefined"!=typeof window&&window.performance&&window.performance.now?()=>Math.floor(1e6*window.performance.now()):()=>1e6*Date.now();const a=class{constructor(e){o(this,"start",(()=>(this.startTime=s(),this.startTime))),o(this,"end",(()=>(this.endTime=s(),this.duration=this.startTime?this.endTime-this.startTime:null,this.duration)));try{this.uuid=(0,i.Z)()}catch(t){this.uuid=(0,n.Z)()}e&&Object.assign(this,e)}}},934523:(e,t,r)=>{r.d(t,{L1:()=>o,Rz:()=>c,WZ:()=>s,cI:()=>n,fe:()=>a,hu:()=>i});const i=64,n=80,o=22,s="HeaderContent",a=671,c={boxShadow:"0px 8px 8px -8px rgba(0, 0, 0, 0.1)",transition:"box-shadow 300ms ease-in-out"}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/48950-778da0e9234a8159.mjs.map