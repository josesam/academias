/*
 Copyright (c) 2010, Yahoo! Inc. All rights reserved.
 Code licensed under the BSD License:
 http://developer.yahoo.com/yui/license.html
 version: 3.3.0
 build: 3167
 */
YUI.add("history-base",function(B){var I=B.Lang,E=B.Object,L=YUI.namespace("Env.History"),M=B.Array,N=B.config.doc,F=N.documentMode,J=B.config.win,C={merge:true},H="change",A="add",G="replace";function D(){this._init.apply(this,arguments);}B.augment(D,B.EventTarget,null,null,{emitFacade:true,prefix:"history",preventable:false,queueable:true});if(!L._state){L._state={};}function K(O){return I.type(O)==="object";}D.NAME="historyBase";D.SRC_ADD=A;D.SRC_REPLACE=G;D.html5=!!(J.history&&J.history.pushState&&J.history.replaceState&&("onpopstate"in J||B.UA.gecko>=2));D.nativeHashChange=("onhashchange"in J||"onhashchange"in N)&&(!F||F>7);B.mix(D.prototype,{_init:function(P){var O;P=this._config=P||{};O=this._initialState=this._initialState||P.initialState||null;this.publish(H,{broadcast:2,defaultFn:this._defChangeFn});if(O){this.add(O);}},add:function(){var O=M(arguments,0,true);O.unshift(A);return this._change.apply(this,O);},addValue:function(P,R,O){var Q={};Q[P]=R;return this._change(A,Q,O);},get:function(P){var Q=L._state,O=K(Q);if(P){return O&&E.owns(Q,P)?Q[P]:undefined;}else{return O?B.mix({},Q,true):Q;}},replace:function(){var O=M(arguments,0,true);O.unshift(G);return this._change.apply(this,O);},replaceValue:function(P,R,O){var Q={};Q[P]=R;return this._change(G,Q,O);},_change:function(Q,P,O){O=O?B.merge(C,O):C;if(O.merge&&K(P)&&K(L._state)){P=B.merge(L._state,P);}this._resolveChanges(Q,P,O);return this;},_fireEvents:function(Q,P,O){this.fire(H,{_options:O,changed:P.changed,newVal:P.newState,prevVal:P.prevState,removed:P.removed,src:Q});E.each(P.changed,function(S,R){this._fireChangeEvent(Q,R,S);},this);E.each(P.removed,function(S,R){this._fireRemoveEvent(Q,R,S);},this);},_fireChangeEvent:function(Q,O,P){this.fire(O+"Change",{newVal:P.newVal,prevVal:P.prevVal,src:Q});},_fireRemoveEvent:function(Q,O,P){this.fire(O+"Remove",{prevVal:P,src:Q});},_resolveChanges:function(U,S,P){var T={},O,R=L._state,Q={};if(!S){S={};}if(!P){P={};}if(K(S)&&K(R)){E.each(S,function(V,W){var X=R[W];if(V!==X){T[W]={newVal:V,prevVal:X};O=true;}},this);E.each(R,function(W,V){if(!E.owns(S,V)||S[V]===null){delete S[V];Q[V]=W;O=true;}},this);}else{O=S!==R;}if(O){this._fireEvents(U,{changed:T,newState:S,prevState:R,removed:Q},P);}},_storeState:function(P,O){L._state=O||{};},_defChangeFn:function(O){this._storeState(O.src,O.newVal,O._options);}},true);B.HistoryBase=D;},"3.3.0",{requires:["event-custom-complex"]});
