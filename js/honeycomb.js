var partnersArr=[];

getPartnersData();


function getPartnersData () {
  var node=document.getElementById('invisible-node');
  var str=node.innerText;
  str=str.trim();
  var arr=str.split('||');
  for (var i = 0; i < arr.length-1; i++) {
    partnersArr[i]={};
    var subArr=arr[i].split('|');
    partnersArr[i].text=subArr[0];
    partnersArr[i].image=subArr[1];
    partnersArr[i].link=subArr[2];
  }
  getImageData();
}
function getImageData () {
  var image='';
  for (var i = 0; i < partnersArr.length; i++) {
    image=image+partnersArr[i].image;
  }
  var node=document.getElementById('image-node');
  node.innerHTML=image;
  var images=node.children;
  for (var i = 0; i < images.length; i++) {
    partnersArr[i].image=images[i].getAttribute('src');
  }
  setPostData();
}
function setPostData () {
  console.log(partnersArr);
  var imageNodeArr=document.getElementsByClassName('comb-tab_content-overlay');
  var textNodeArr=document.getElementsByClassName('comb-tab_content-text');
  var linkArr=document.getElementsByClassName('comb-tab');
  var containerArr=document.getElementsByClassName('comb-container');
  var counter=0;
  for (var i = 0; i < partnersArr.length; i++) {
    textNodeArr[i].children[0].innerText=partnersArr[i].text;
    imageNodeArr[i].style.backgroundImage='url('+partnersArr[i].image+')';
    linkArr[i].setAttribute('href', partnersArr[i].link);
    counter=Math.floor(i/4);
  }
   for (var n = counter-1; n < containerArr.length; n++) {
     containerArr[n].style.display='none'; 
   }
 }