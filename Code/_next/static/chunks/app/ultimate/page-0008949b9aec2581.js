(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[63],{3746:function(e,i,t){Promise.resolve().then(t.bind(t,3158)),Promise.resolve().then(t.t.bind(t,8173,23)),Promise.resolve().then(t.bind(t,6231)),Promise.resolve().then(t.bind(t,7887))},3158:function(e,i,t){"use strict";t.d(i,{StoreSection:function(){return V}});var a=t(7437),l=t(2265),r=t(6648),n=t(6637),s={src:"/_next/static/media/promobanner.450dafa5.png",height:560,width:1440,blurDataURL:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAADCAMAAACZFr56AAAAGFBMVEUICAoYFRUeISJzdHN6Sj4oISAtLTAjHRsEaJb6AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIElEQVR4nGNgYGBjYmJlYGBgYGdmZmEBsRgZmdgZGRkAAwgAN8ZoSCEAAAAASUVORK5CYII=",blurWidth:8,blurHeight:3},o=t(4398),d=t(9343),c=t(1326),m=t(511),u=t(4053),h=t(6548),A=t(5343),p=t(6154),g=t(335),x=t(7630),b=t(4444),f=t(1705),v=t(1665),j=t(468),y=t(64),C=t(9889),S=t(5734),w=t(374),U=t(4818),k=t(1907);let E=(0,b.Z)({palette:{mode:"dark",background:{default:"#000",paper:"#1c1c1c"},primary:{main:"#FF8B00"},secondary:{main:"#74a8bb"},text:{primary:"#fff"}}}),N=(0,p.Z)("div")(e=>{let{theme:i,open:t}=e;return{position:"absolute",top:"50%",left:"50%",transform:"translate(-50%, -50%)",width:500,backgroundColor:i.palette.background.paper,padding:20,color:"white",borderRadius:10,boxShadow:"0 0 10px rgba(0,0,0,0.5)"}}),T=(0,p.Z)(c.Z)(e=>{let{theme:i}=e;return{}});var Z=e=>{var i,t;let{isOpen:r,handleClose:n,handleSubmit:s}=e,{register:o,handleSubmit:c,formState:{errors:p}}=(0,d.cI)(),[b,Z]=(0,l.useState)(""),D=(0,l.useRef)(null),R=(0,l.useRef)(null),[V,L]=(0,l.useState)(!1),[G,I]=(0,l.useState)(0),[M,O]=(0,l.useState)(!1),[B,F]=(0,l.useState)(""),Y=()=>{I(e=>e+1)},z=(e,i)=>{"clickaway"!==i&&O(!1)},P=()=>{L(!1),Z(""),I(0),n()},W=async e=>{var i,t,a,l;let r;L(!0);let n=e.code,o=n&&b||e.email;Z(o),o&&(r=await(null==R?void 0:null===(t=R.current)||void 0===t?void 0:null===(i=t.executeAsync)||void 0===i?void 0:i.call(t)));try{if(!n&&!r){F("Captcha failed, try reloading the page."),O(!0),L(!1);return}let e=await fetch("/api/store/validate-"+(n?"code":"email"),{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({email:o,recaptchaToken:r,code:n})}),i=await e.json();i.success?(Y(),(n||i.skip)&&(s(o),I(0))):(F(i.message),O(!0),n||D.current.reset())}catch(e){F("Error: "+e.message),O(!0),n||D.current.reset()}finally{L(!1),null==R||null===(l=R.current)||void 0===l||null===(a=l.reset)||void 0===a||a.call(l)}};return r?(0,a.jsxs)(f.Z,{theme:E,children:[(0,a.jsx)(A.Z,{open:r,onClose:P,"aria-labelledby":"email-validation-modal-title","aria-describedby":"email-validation-modal-description",children:(0,a.jsx)(N,{children:(0,a.jsxs)(T,{component:"form",onSubmit:c(W),ref:D,children:[(0,a.jsx)(g.Z,{"aria-label":"close",onClick:P,sx:{position:"absolute",top:"auto",right:"calc(50% - 240px)",marginTop:"-40px"},children:(0,a.jsx)(x.Z,{})}),(0,a.jsxs)(y.Z,{activeStep:G,sx:{marginBottom:2,marginTop:"20px"},children:[(0,a.jsx)(C.Z,{children:(0,a.jsx)(S.Z,{children:"Enter Email"})}),(0,a.jsx)(C.Z,{children:(0,a.jsx)(S.Z,{children:"Verify Code"})}),(0,a.jsx)(C.Z,{children:(0,a.jsx)(S.Z,{children:"Checkout"})})]}),(0,a.jsx)(m.Z,{variant:"h6",component:"h2",sx:{marginTop:2},children:"Email Validation"}),0===G&&(0,a.jsxs)(a.Fragment,{children:[(0,a.jsx)(m.Z,{variant:"body1",component:"p",sx:{marginTop:1},children:"Please enter your email address to create a new subscription. This will be used for security purposes and to prevent checkout errors."}),(0,a.jsx)(u.Z,{...o("email",{required:"Email is required",pattern:{value:/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i,message:"Invalid email address"}}),error:!!p.email,helperText:null===(i=p.email)||void 0===i?void 0:i.message,label:"Email",fullWidth:!0,margin:"normal",variant:"outlined"}),(0,a.jsx)(k.Z,{sitekey:"6Lec0yIpAAAAANnv8khYyxLht_LReIOIjiWzPNgj",theme:"dark",ref:R,size:"invisible",badge:"inline",isolated:!0,onErrored:e=>{F("Captcha failed, try reloading the page."),O(!0)}})]}),1===G&&(0,a.jsxs)(a.Fragment,{children:[(0,a.jsxs)(m.Z,{variant:"body1",component:"p",sx:{marginTop:1},children:["A one-time code has been sent to ",b,". Please enter the code below. The code will expire in 5 minutes. ",(0,a.jsx)("br",{}),(0,a.jsx)(v.Z,{href:"#",onClick:()=>{D.current.reset(),I(0)},children:"Click here"})," ","to resend the code."]}),(0,a.jsx)(u.Z,{...o("code",{required:"Code is required"}),error:!!p.code,helperText:null===(t=p.code)||void 0===t?void 0:t.message,label:"Code",fullWidth:!0,margin:"normal",variant:"outlined"}),(0,a.jsx)(h.Z,{type:"button",variant:"contained",color:"secondary",sx:{marginTop:2,marginRight:2},onClick:()=>{D.current.reset(),I(0)},children:"Back"})]}),(0,a.jsx)(h.Z,{type:"submit",variant:"contained",color:"primary",sx:{marginTop:2},disabled:V,children:V?(0,a.jsx)(j.Z,{size:24}):"Validate"})]})})}),(0,a.jsx)(w.Z,{open:M,autoHideDuration:6e3,onClose:z,children:(0,a.jsx)(U.Z,{onClose:z,severity:"error",children:B})})]}):null},D=t(2419),R=t(1877);let V=()=>{let[e,i]=(0,l.useState)("monthly"),[t,d]=(0,l.useState)(!1),[c,m]=(0,l.useState)(""),u=(0,l.useCallback)(e=>{d(!0),m(e)},[]);return(0,a.jsxs)(a.Fragment,{children:[(0,a.jsx)("div",{className:"store-section orange-grad",id:"no-mobile",style:{display:"none"},children:(0,a.jsx)("div",{className:"card-content",children:(0,a.jsx)("div",{className:"columns is-centered is-multiline",children:(0,a.jsx)("span",{children:"Please use a PC to buy RoGold Ultimate"})})})}),(0,a.jsx)("div",{className:"store-section orange-grad",id:"get-ultimate",children:(0,a.jsx)("div",{className:"card-content",children:(0,a.jsx)("div",{className:"columns is-centered is-multiline",children:(0,a.jsxs)("div",{className:"column is-10-tablet is-8-desktop is-6-widescreen",children:[(0,a.jsx)("div",{className:"switch has-text-centered columns is-mobile is-centered",children:["monthly","annually","once"].map(t=>(0,a.jsx)("a",{onClick:()=>i(t),style:{backgroundColor:e===t?"#141414":"transparent",color:"white",fontWeight:600,borderRadius:8,padding:"10px 20px",cursor:"pointer",margin:0},className:"column",children:t.charAt(0).toUpperCase()+t.slice(1)},t))}),(0,a.jsx)(r.default,{src:s,alt:"RoGold Ultimate",width:741,height:288,priority:!0,style:{borderRadius:10,marginBottom:10},placeholder:"blur"}),(0,a.jsx)("h5",{style:{fontWeight:650,fontSize:32,display:o.tq||o.Em?"block":"none"},children:"To buy RoGold Ultimate, visit the site on a Computer."}),(0,a.jsx)("div",{className:"columns is-variable is-8",style:{display:o.tq||o.Em?"none":""},children:[{name:"Standard Edition",priceOnce:"$139",priceAnnually:"$49",priceMonthly:"$5"},{name:"Developer Edition",priceOnce:"$219",priceAnnually:"$69",priceMonthly:"$7",isDev:!0}].map(i=>(0,a.jsxs)("div",{className:"column",children:[(0,a.jsx)("h1",{children:i.name}),(0,a.jsxs)("h4",{children:["Enhance your experience with ",i.name.includes("Developer")?"developer tools and more.":"powerful features."]}),(0,a.jsxs)("h5",{className:"price",children:["once"===e&&i.priceOnce||"annually"===e&&i.priceAnnually||i.priceMonthly,"once"!==e&&(0,a.jsxs)("small",{children:["/",e]})]}),(0,a.jsxs)("div",{className:"button-container",children:[(0,a.jsx)("button",{onClick:()=>{u(i.isDev&&n.Vt[e].dev||n.Vt[e].ultimate)},className:"button-checkout",disabled:i.disabled,children:i.disabled?"Coming Soon":"once"===e&&"Buy Now"||"Subscribe"}),(0,a.jsxs)("button",{hidden:"once"===e,onClick:()=>{u(i.isDev&&n.Vt[e]["dev-gift"]||n.Vt[e].gift)},className:"button-gift",disabled:i.disabled,children:["Send As Gift ",(0,a.jsx)("span",{className:"gift-icon",children:"\uD83C\uDF81"})]})]})]},i.name))}),(0,a.jsxs)("div",{className:"features-comparison",children:[(0,a.jsx)("div",{className:"seperator-line"}),(0,a.jsxs)("table",{className:"features-table",children:[(0,a.jsx)("thead",{children:(0,a.jsxs)("tr",{children:[(0,a.jsx)("th",{children:"Feature"}),(0,a.jsx)("th",{children:"Standard Edition"}),(0,a.jsx)("th",{children:"Developer Edition"})]})}),(0,a.jsx)("tbody",{children:[{name:"Remade Roblox UI",ultimate:!0,developer:!0},{name:"Playtime Tracking",ultimate:!0,developer:!0},{name:"Leveling system",ultimate:!0,developer:!0},{name:"Desktop App",ultimate:"Limited",developer:!0},{name:"Studio Plugin",ultimate:!1,developer:!0}].map(e=>(0,a.jsxs)("tr",{children:[(0,a.jsx)("td",{children:e.name}),(0,a.jsx)("td",{className:e.ultimate?"feature-available":"feature-unavailable",children:!0===e.ultimate&&(0,a.jsx)(D.Z,{})||!1===e.ultimate&&"—"||e.ultimate}),(0,a.jsx)("td",{className:e.developer?"feature-available":"feature-unavailable",children:e.developer?(0,a.jsx)(D.Z,{}):"—"})]},e.name))})]}),(0,a.jsx)("a",{style:{color:"white",fontWeight:600,borderRadius:10,padding:"10px",width:"100%",fontSize:18},className:"shiny",href:"/features#ultimate",children:"More Features"})]}),(0,a.jsxs)("h5",{className:"footer-links",children:["Getting started with RoGold Ultimate is easy. Simply ",(0,a.jsx)("a",{href:"https://"+n.AO.ultimate,children:"download the extension"}),", subscribe to a license, and enter the key from your received email. Check out ",(0,a.jsx)("a",{href:"https://support.rogold.live/portal/en/kb/articles/getting-started",children:"our guide"})," for more information."]})]})})})}),(0,a.jsx)(R.default,{src:"https://js.chargebee.com/v2/chargebee.js","data-cb-site":"alrovi",onLoad:()=>{Chargebee.init({site:"alrovi",isItemsModel:!0}).setCheckoutCallbacks(function(e){return{success:function(e){console.log("success",e)}}})}}),(0,a.jsx)(Z,{isOpen:t,handleSubmit:e=>{d(!1);let i=Chargebee.getInstance();i.isItemsModel=!0;let t=i.getCart();t.setCustomer({email:e,verified_email:e});let a=i.initializeProduct(c);t.replaceProduct(a),t.proceedToCheckout()},handleClose:()=>d(!1)})]})}},6231:function(e,i,t){"use strict";t.r(i),i.default={src:"/_next/static/media/rogold-features.1d739e3d.png",height:2116,width:2478,blurDataURL:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAMAAAACh/xsAAAAb1BMVEX2iQGgaCEuJxySZjbsoy9PVEzNeRDtgwDgm0SHWB7/uXL/4qH9sF7hgwD4qFL/iQD7jwD/lgC6eCX/xD9ZTC6iYwh8cVYZGRWCYC+fcj1ROhjzkgHwu2txYEv+1oz3x336v1b/x07/nACFeWLAfxZGCk5oAAAAG3RSTlO+vuS7vOPA47zEu/685LzjxOTj/uPk4+T+u+TKm+fJAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAQUlEQVR4nAXBBQLAIAwEsEPbzpgbMP//G5cgxufLb14BwJvNKFDdTYvWO4DWi4gCUejd6GYUVcPM1qI8zpSue/gBZfcDNB+YtfUAAAAASUVORK5CYII=",blurWidth:8,blurHeight:7}},7887:function(e,i,t){"use strict";t.r(i),i.default={src:"/_next/static/media/want-to-accel-min.26c09a20.png",height:2582,width:2880,blurDataURL:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAHCAMAAAACh/xsAAAAUVBMVEWUPzIwNCwzMCd9VSVMSURfLE1KSToeJCX00wCJWiBORkZFQDVXNU//ogOXR1H/mwS5aiL/mAQ3QzVZOTN/WR81IT9bNySBWiM9NzU+MT42MCqICpo1AAAAGXRSTlMBeIbmQPwi/g8LVZ1aTYxpyjn5/qL5+qdgm5azYAAAAAlwSFlzAAALEwAACxMBAJqcGAAAADtJREFUeJwdwYcRwCAMALEHDMaQ3p39B81dJACr/Oo4rwZlmJZ0VAied093I/p25uvtSOuqqgGQ+EixDzkFAfcGXC64AAAAAElFTkSuQmCC",blurWidth:8,blurHeight:7}},6637:function(e){"use strict";e.exports=JSON.parse('{"UY":{"Vi":"discord.com/invite/XMHn9zV3UA","Rh":"roblox.com/groups/11479637/RoGold","km":"twitter.com/RoGoldOfficial"},"AO":{"chrome":"chrome.google.com/webstore/detail/rogold-level-up-roblox/mafcicncghogpdpaieifglifaagndbni","firefox":"addons.mozilla.org/en-US/firefox/addon/rogold/","apple":"apps.apple.com/us/app/rogold/id1618599725","safari":"apps.apple.com/us/app/rogold/id1618599725","edge":"microsoftedge.microsoft.com/addons/detail/rogold/ilaofahheohhmodbaiiekdkffahpgfbo","ultimate":"chrome.google.com/webstore/detail/rogold-ultimate-roblox-en/namkakclifhmccmkbeddddpjegmdimed"},"Vt":{"monthly":{"ultimate":"ULT-USD-Monthly","gift":"ULT-GIFT-USD-Monthly","dev":"ULT-DEV-USD-Monthly","dev-gift":"ULT-DEV-GIFT-USD-Monthly"},"annually":{"ultimate":"ULT-USD-Yearly","gift":"ULT-GIFT-USD-Yearly","dev":"ULT-DEV-USD-Yearly","dev-gift":"ULT-DEV-GIFT-USD-Yearly"},"once":{"ultimate":"ULT_ONCE-USD","dev":"ULT_DEV_ONCE-USD"}}}')}},function(e){e.O(0,[173,486,567,421,727,971,23,744],function(){return e(e.s=3746)}),_N_E=e.O()}]);