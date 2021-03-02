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
  var imageNodeArr=document.getElementsByClassName('comb-tab_content-overlay');
  var textNodeArr=document.getElementsByClassName('comb-tab_content-text');
  var linkArr=document.getElementsByClassName('comb-tab');
  for (var i = 0; i <partnersArr.length; i=i+8) {
    var n=i;
    var k=i;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+2;
    k=i+1;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+4;
    k=i+2;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+6;
    k=i+3;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+1;
    k=i+4;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+3;
    k=i+5;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+5;
    k=i+6;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
    n=i+7;
    k=i+7;
    try {
      textNodeArr[n].children[0].innerText=partnersArr[k].text;
      imageNodeArr[n].style.backgroundImage='url('+partnersArr[k].image+')';
      linkArr[n].setAttribute('href', partnersArr[k].link);
    } catch(e) { }
  }
  emptyCellsHide();
}
function emptyCellsHide () {
 var tabArr=document.getElementsByClassName('comb-tab');
 var textArr=document.getElementsByClassName('comb-tab_content-text');
 for (var i = 0; i < tabArr.length; i++) {
  if (textArr[i].innerText=='') {tabArr[i].style.display='none';}
}
emptyBlocksHide();
}
function emptyBlocksHide () {
  var blockArr=document.getElementsByClassName('comb-block');
  for (var i = 0; i < blockArr.length; i++) {
    if (blockArr[i].children[0].style.display=='none'&&
      blockArr[i].children[1].style.display=='none') {
      blockArr[i].style.display='none';
    }
  }
}