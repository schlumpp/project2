//这个js文件是专门给 main.php使用的

<!--图片轮换函数-->
	   var s=function(){
			var interv=2000; 
			var interv2=10; 
			var opac1=80; 
			var source="fade_focus" 

			function getTag(tag,obj){
				if(obj==null){
					return document.getElementsByTagName(tag)
				}
				else{
					return obj.getElementsByTagName(tag)
				}
		}
		function getid(id){
			return document.getElementById(id)
		};
		var opac=0,j=0,t=63,num,scton=0,timer,timer2,timer3;var id=getid(source);
		id.removeChild(getTag("div",id)[0]);
		var li=getTag("li",id);
		var div=document.createElement("div");
		var title=document.createElement("div");
		var span=document.createElement("span");
		var button=document.createElement("div");
		button.className="button";
		for(var i=0;i<li.length;i++){
			var a=document.createElement("a");
			a.innerHTML=i+1;
			a.onclick=function(){
				clearTimeout(timer);
				clearTimeout(timer2);
				clearTimeout(timer3);
				j=parseInt(this.innerHTML)-1;
				scton=0;t=63;opac=0;fadeon();
			};
			a.className="b1";
			a.onmouseover=function(){
				this.className="b2"
			};
			a.onmouseout=function(){
				this.className="b1";sc(j)
			};
			button.appendChild(a);
		}

		function alpha(obj,n){
			if(document.all){
				obj.style.filter="alpha(opacity="+n+")";
			}
			else{
				obj.style.opacity=(n/100);
			}
		}

		function sc(n){
			for(var i=0;i<li.length;i++){
				button.childNodes[i].className="b1"
			};
			button.childNodes[n].className="b2";
		}
		title.className="num_list";
		title.appendChild(span);
		alpha(title,opac1);
		id.className="d1";
		div.className="d2";
		id.appendChild(div);
		id.appendChild(title);
		id.appendChild(button);
		var fadeon=function(){
			opac+=5;
			div.innerHTML=li[j].innerHTML;
			span.innerHTML=getTag("img",li[j])[0].alt;
			alpha(div,opac);
			if(scton==0){
				sc(j);
				num=-2;
				scrolltxt();
				scton=1
			};
			if(opac<100){
				timer=setTimeout(fadeon,interv2)
			}
			else{
				timer2=setTimeout(fadeout,interv);
			};
		}

		var fadeout=function(){
			opac-=5;
			div.innerHTML=li[j].innerHTML;
			alpha(div,opac);
			if(scton==0){
				num=2;
				scrolltxt();
				scton=1
			};
			if(opac>0){
				timer=setTimeout(fadeout,interv2)
			}
			else{
				if(j<li.length-1){
					j++
				}
				else{
					j=0
				};
			fadeon()
			};
		}
		var scrolltxt=function(){
			t+=num;span.style.marginTop=t+"px";
			if(num<0&&t>3){
				timer3=setTimeout(scrolltxt,interv2)
			}
			else if(num>0&&t<62){
				timer3=setTimeout(scrolltxt,interv2)
			}
			else{
				scton=0
			}
			};
			fadeon();
		}
		//文字滚动
		$(function(){
			                var speed=20    //设置滚动的速度，数值越小，滚动越快！
							while(demo.offsetHeight-demo1.offsetHeight > 0){
							demo1.innerHTML+=demo1.innerHTML
							}
							demo2.innerHTML=demo1.innerHTML 
							function Marquee(){ 
							if(demo2.offsetTop-demo.scrollTop<=0) 
							demo.scrollTop-=demo1.offsetHeight 
							else{ 
							demo.scrollTop++ 
							} 
							} 
							var MyMar=setInterval(Marquee,speed) 
							demo.onmouseover=function(){clearInterval(MyMar)} 
							demo.onmouseout=function(){MyMar=setInterval(Marquee,speed)} 
							//启动图片轮换函数
							window.onload=s;
		});
		