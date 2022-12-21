jQuery((function(e){"use strict";if(document.createElement("audio").canPlayType){new Plyr("#audio1",{controls:["restart","play","progress","current-time","duration","mute","volume"]});var a=0,n=!1,t="",i=[{track:1,name:"All This Is - Joe L.'s Studio",duration:"2:46",file:"JLS_ATI"},{track:2,name:"The Forsaken - Broadwing Studio (Final Mix)",duration:"8:30",file:"BS_TF"},{track:3,name:"All The King's Men - Broadwing Studio (Final Mix)",duration:"5:01",file:"BS_ATKM"},{track:4,name:"The Forsaken - Broadwing Studio (First Mix)",duration:"8:31",file:"BSFM_TF"},{track:5,name:"All The King's Men - Broadwing Studio (First Mix)",duration:"5:05",file:"BSFM_ATKM"},{track:6,name:"All This Is - Alternate Cuts",duration:"2:48",file:"AC_ATI"},{track:7,name:"All The King's Men (Take 1) - Alternate Cuts",duration:"5:44",file:"AC_ATKMTake_1"},{track:8,name:"All The King's Men (Take 2) - Alternate Cuts",duration:"5:26",file:"AC_ATKMTake_2"},{track:9,name:"Magus - Alternate Cuts",duration:"5:46",file:"AC_M"},{track:10,name:"The State Of Wearing Address (fucked up) - Alternate Cuts",duration:"5:25",file:"AC_TSOWAfucked_up"},{track:11,name:"Magus - Popeye's (New Years '04 - '05)",duration:"5:53",file:"PNY04-05_M"},{track:12,name:"On The Waterfront - Popeye's (New Years '04 - '05)",duration:"4:40",file:"PNY04-05_OTW"},{track:13,name:"Trance - Popeye's (New Years '04 - '05)",duration:"13:15",file:"PNY04-05_T"},{track:14,name:"The Forsaken - Popeye's (New Years '04 - '05)",duration:"8:12",file:"PNY04-05_TF"}],l=(e.each(i,(function(a,n){var t=n.track,i=n.name,l=n.duration;1===t.toString().length&&(t="0"+t),e("#plList").append('<li>                     <div class="plItem">                         <span class="plNum">'+t+'.</span>                         <span class="plTitle">'+i+'</span>                         <span class="plLength">'+l+"</span>                     </div>                 </li>")})),i.length),r=e("#npAction"),o=e("#npTitle"),s=e("#audio1").on("play",(function(){n=!0,r.text("Now Playing...")})).on("pause",(function(){n=!1,r.text("Paused...")})).on("ended",(function(){r.text("Paused..."),a+1<l?(a++,u(a),s.play()):(s.pause(),u(a=0))})).get(0),u=(e("#btnPrev").on("click",(function(){a-1>-1?(a--,u(a),n&&s.play()):(s.pause(),u(a=0))})),e("#btnNext").on("click",(function(){a+1<l?(a++,u(a),n&&s.play()):(s.pause(),u(a=0))})),e("#plList li").on("click",(function(){var n=parseInt(e(this).index());n!==a&&c(n)})),function(n){e(".plSel").removeClass("plSel"),e("#plList li:eq("+n+")").addClass("plSel"),o.text(i[n].name),a=n,s.src="https://archive.org/download/mythium/"+i[n].file+t}),c=function(e){u(e),s.play()};t=s.canPlayType("audio/mpeg")?".mp3":s.canPlayType("audio/ogg")?".ogg":"",u(a)}else{e(".column").addClass("hidden");var d=e("#audio1").text();e(".container").append('<p class="no-support">'+d+"</p>")}}));