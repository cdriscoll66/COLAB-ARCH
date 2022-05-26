"use strict";(self.webpackChunkgravityforms=self.webpackChunkgravityforms||[]).push([[514],{158:function(e,t,r){r.r(t),r.d(t,{default:function(){return R}});var i,a,o,n,l,s,d,p,c,u,g,f=r(3736),m=r(2340),v=r.n(m),b=r(7329),h=r.n(b),w=r(5311),y=r(8990),_=r.n(y),O=r(5518),j=r(7536),A=r.n(j),P=(null===(i=window)||void 0===i?void 0:i.form)||{},C=(null===(a=window)||void 0===a?void 0:a.GetInputType)||null,T=(null===(o=window)||void 0===o?void 0:o.GetLabel)||null,L=(null===(n=window)||void 0===n?void 0:n.GetInput)||null,x=(null===(l=window)||void 0===l?void 0:l.Copy)||null,I=(null===(s=window)||void 0===s?void 0:s.IsPricingField)||null,F=(null===(d=window)||void 0===d?void 0:d.HasPostField)||null,q=function(e,t){var r=e.classList.value;if(!r)return"";var i=r.split(" ");for(var a in i)if(Object.prototype.hasOwnProperty.call(i,a)){var o=i[a].split("-");if("mt"==o[0]&&o[1]==t)return o.length>3?(delete o[0],delete o[1],o):2===o.length||o[2]}return""},S=function(e){for(var t in A().mergeTags)if(Object.prototype.hasOwnProperty.call(A().mergeTags,t)){var r=A().mergeTags[t].tags;for(var i in r)if(Object.prototype.hasOwnProperty.call(r,i)&&r[i].tag==e)return r[i].label}return""},k=function(e){return A().mergeTags[e].label},E=function(e,t){void 0===t&&(t="");var r=[],i=C(e),a="list"===i?":"+t:"",o="",n="";if(w.inArray(i,["date","email","time","password"])>-1&&(e.inputs=null),void 0!==e.inputs&&w.isArray(e.inputs)){for(var l in"checkbox"===i&&(o="{"+(n=T(e,e.id).replace("'","\\'"))+":"+e.id+a+"}",r.push({tag:o,label:n})),e.inputs)if(Object.prototype.hasOwnProperty.call(e.inputs,l)){var s=e.inputs[l];"creditcard"===i&&w.inArray(parseFloat(s.id),[parseFloat(e.id+".2"),parseFloat(e.id+".3"),parseFloat(e.id+".5")])>-1||(o="{"+(n=T(e,s.id).replace("'","\\'"))+":"+s.id+a+"}",r.push({tag:o,label:n}))}}else o="{"+(n=T(e).replace("'","\\'"))+":"+e.id+a+"}",r.push({tag:o,label:n});return r},D=function(e){var t=P.fields,r=e.getAttribute("id"),i=1==q(e,"hide_all_fields"),a=q(e,"exclude"),o=q(e,"prepopulate");o&&(i=!0);var n=function(e,t,r,i,a,o){void 0===e&&(e=[]),void 0===i&&(i=[]);var n=[],l=[],s=[],d=[],p=[],c=[],u=[],g=[],f=[];if(r||s.push({tag:"{all_fields}",label:S("{all_fields}")}),!a){for(var m in e)if(Object.prototype.hasOwnProperty.call(e,m)){var b=e[m];if(!b.displayOnly){var h=C(b);if(-1===w.inArray(h,i)){if(b.isRequired)if("name"===h){var y=x(b),_=void 0,O=void 0,j=void 0,P=void 0;"extended"===b.nameFormat?(_=L(b,b.id+".2"),j=L(b,b.id+".8"),(P=x(b)).inputs=[_,j],l.push(P),delete y.inputs[0],delete y.inputs[3]):"advanced"===b.nameFormat&&(_=L(b,b.id+".2"),O=L(b,b.id+".4"),j=L(b,b.id+".8"),(P=x(b)).inputs=[_,O,j],l.push(P),delete y.inputs[0],delete y.inputs[2],delete y.inputs[4]),n.push(y)}else n.push(b);else l.push(b);I(b.type)&&u.push(b)}}}if(n.length>0)for(var T in n)Object.prototype.hasOwnProperty.call(n,T)&&(g=g.concat(E(n[T],o)));if(l.length>0)for(var q in l)Object.prototype.hasOwnProperty.call(l,q)&&(f=f.concat(E(l[q],o)));if(u.length>0)for(var D in r||d.push({tag:"{pricing_fields}",label:S("{pricing_fields}")}),u)Object.prototype.hasOwnProperty.call(u,D)&&d.concat(E(u[D],o))}var G=["ip","date_mdy","date_dmy","embed_post:ID","embed_post:post_title","embed_url","entry_id","entry_url","form_id","form_title","user_agent","referer","post_id","post_edit_url","user:display_name","user:user_email","user:user_login"];for(var H in a&&(G.splice(G.indexOf("entry_id"),1),G.splice(G.indexOf("entry_url"),1),G.splice(G.indexOf("form_id"),1),G.splice(G.indexOf("form_title"),1)),F()&&!a||(G.splice(G.indexOf("post_id"),1),G.splice(G.indexOf("post_edit_url"),1)),G)-1===w.inArray(G[H],i)&&p.push({tag:"{"+G[H]+"}",label:S("{"+G[H]+"}")});var V=function(){for(var e in A().mergeTags)if(Object.prototype.hasOwnProperty.call(A().mergeTags,e)&&"custom"===e)return A().mergeTags[e];return[]}();if(V.tags.length>0)for(var z in V.tags)if(Object.prototype.hasOwnProperty.call(V.tags,z)){var B=V.tags[z];c.push({tag:B.tag,label:B.label})}var M={ungrouped:{label:k("ungrouped"),tags:s},required:{label:k("required"),tags:g},optional:{label:k("optional"),tags:f},pricing:{label:k("pricing"),tags:d},other:{label:k("other"),tags:p},custom:{label:k("custom"),tags:c}};return v().applyFilters("gform_merge_tags",M,t,r,i,a,o,void 0)}(t,r,i,a,o,q(e,"option")),l=function(e){var t=0;for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&e[r].tags.length>0&&t++;return t>1}(n),s=[];for(var d in n)if(Object.prototype.hasOwnProperty.call(n,d)){var p=n[d].label,c=n[d].tags,u=p&&l,g=[];if(!(c.length<=0)){for(var f in c)if(Object.prototype.hasOwnProperty.call(c,f)){var m=c[f],b=v().tools.stripSlashes(m.label),h=m.tag;g.push({value:h,label:b})}u?s.push({label:p,listData:g}):s.push.apply(s,g)}}return s},G=(null===h()||void 0===h()||null===(p=h().components)||void 0===p?void 0:p.merge_tags)||{};v().instances=(null===v()||void 0===v()?void 0:v().instances)||{},v().components=(null===v()||void 0===v()?void 0:v().components)||{};var H=(null===(c=window)||void 0===c?void 0:c.InsertVariable)||null,V=(null===(u=window)||void 0===u?void 0:u.InsertEditorVariable)||null,z=function(e){this.isEditor?V(this.elem.getAttribute("id"),e):H(this.elem.getAttribute("id"),null,e),w(this.elem).trigger("input").trigger("propertychange")},B=function(){v().simplebar.initializeInstances(),function(e){var t=document.querySelector('[data-js="'.concat(e,'"]')),r=(0,O.getClosest)(t,".panel-block-tabs__body");if(r){var i=250-r.offsetHeight,a=window.getComputedStyle(r).getPropertyValue("padding-bottom");i<10||(r.setAttribute("data-js-initial-padding",a),r.style.paddingBottom="".concat(i,"px"))}}(this.selector),(0,O.browsers)().firefox&&document.querySelector('[data-js="'.concat(this.selector,'"]')).querySelector(".gform-dropdown__container").removeAttribute("style")},M=function(){var e,t,r;e=this.selector,t=document.querySelector('[data-js="'.concat(e,'"]')),(r=(0,O.getClosest)(t,".panel-block-tabs__body"))&&r.hasAttribute("data-js-initial-padding")&&(r.style.paddingBottom=r.getAttribute("data-js-initial-padding"),r.removeAttribute("data-js-initial-padding"))},N=function(){var e=(0,O.getNodes)(".merge-tag-support",!0,document,!0);v().components.Dropdown=_(),v().instances.mergeTags=[],e.forEach((function(e,t){(function(e,t){var r=D(e),i=q(e,"manual_position"),a=i?function(e){var t=(0,O.getClosest)(e,".wp-editor-wrap").querySelector(".wp-media-buttons");return(0,O.getChildren)(t).slice(-1).pop()}(e):e,o=function(e,t){var r=q(e,"manual_position"),i=document.createElement("span");return i.classList.add("all-merge-tags"),i.classList.add("gform-merge-tags-dropdown-wrapper"),i.classList.add(e.tagName.toLowerCase()),r?i.classList.add("left"):i.classList.add("right"),i.setAttribute("mt-dropdown-".concat(t),!0),i.innerHTML='<span data-js="gform-dropdown-mt-wrapper-'.concat(t,'"></span>'),i}(e,t);(0,O.insertAfter)(o,a),v().instances.mergeTags.push(new(_())({container:"mt-dropdown-".concat(t),selector:"gform-dropdown-mt-".concat(t),renderTarget:'[data-js="gform-dropdown-mt-wrapper-'.concat(t,'"]'),swapLabel:!1,listData:r,render:!0,triggerPlaceholder:(0,O.saferHtml)(g||(g=(0,f.Z)(['<i class="gform-icon gform-icon--merge-tag gform-button__icon"></i>']))),triggerTitle:G.i18n.insert_merge_tags,wrapperClasses:"gform-dropdown gform-dropdown--merge-tags",triggerId:"mt-dropdown--trigger-".concat(t),triggerAriaId:"mt-dropdown--trigger-label-".concat(t),triggerClasses:"ui-state-disabled",onItemSelect:z.bind({isEditor:i,idx:t,elem:e}),searchPlaceholder:G.i18n.search_merge_tags,onOpen:B.bind({selector:"gform-dropdown-mt-".concat(t)}),onClose:M.bind({selector:"gform-dropdown-mt-".concat(t)}),dropdownListAttributes:'data-js="gform-simplebar"'}))})(e,t),function(e,t){var r=(0,O.getClosest)(e,".field_setting"),i=(0,O.getClosest)(e,".gform-settings-field");r?r.classList.add("field_setting--with-merge-tag"):i&&i.classList.add("gform-settings-field--with-merge-tag")}(e)}))},R=function(){N(),console.info("Gravity Forms Admin: Initialized Merge Tags dropdown component.")}}}]);