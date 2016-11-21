// JavaScript Document

var elem_origen1;
var elem_origen2;
var elem_origen3;
var elem_origen4;
var elem_origen5;
var elem_origen6;
var elem_origen7;
var elem_origen8;

var elem_destino1;
var elem_destino2;
var elem_destino3;

function comenzar1() {
elem_origen1=document.getElementById("imagen1");
elem_origen1.addEventListener("dragstart", comenzamos_arrastrar1,false);	
elem_destino1=document.getElementById("ZonaDestino1");	
elem_destino1.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino1.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino1.addEventListener("drop",soltado1, false);
}
function comenzamos_arrastrar1(e) {	
	var codigo="<img src='" + elem_origen1.getAttribute("src") +"'>";
	e.dataTransfer.setData("Text", codigo);
}
function soltado1(e) {
	e.preventDefault();
	elem_destino1.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar1,false); 


function comenzar2() {
elem_origen2=document.getElementById("imagen2");
elem_origen2.addEventListener("dragstart", comenzamos_arrastrar2,false);	
elem_destino2=document.getElementById("ZonaDestino2");	
elem_destino2.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino2.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino2.addEventListener("drop",soltado2, false);
}
function comenzamos_arrastrar2(e) {	
	var codigo="<img src='" + elem_origen2.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado2(e) {
	e.preventDefault();
	elem_destino2.innerHTML = e.dataTransfer.getData("Text");	

}
window.addEventListener("load", comenzar2,false); 

function comenzar3() {
elem_origen3=document.getElementById("imagen3");
elem_origen3.addEventListener("dragstart", comenzamos_arrastrar3,false);	
elem_destino3=document.getElementById("ZonaDestino3");	
elem_destino3.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("drop",soltado3, false);
}
function comenzamos_arrastrar3(e) {	
	var codigo="<img src='" + elem_origen3.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado3(e) {
	e.preventDefault();
	elem_destino3.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar3,false); 

function comenzar4() {
elem_origen4=document.getElementById("imagen4");
elem_origen4.addEventListener("dragstart", comenzamos_arrastrar4,false);	
elem_destino3=document.getElementById("ZonaDestino3");	
elem_destino3.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("drop",soltado4, false);
}
function comenzamos_arrastrar4(e) {	
	var codigo="<img src='" + elem_origen4.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado4(e) {
	e.preventDefault();
	elem_destino3.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar4,false); 

function comenzar5() {
elem_origen5=document.getElementById("imagen5");
elem_origen5.addEventListener("dragstart", comenzamos_arrastrar5,false);	
elem_destino3=document.getElementById("ZonaDestino3");	
elem_destino3.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("drop",soltado5, false);
}
function comenzamos_arrastrar5(e) {	
	var codigo="<img src='" + elem_origen5.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado5(e) {
	e.preventDefault();
	elem_destino3.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar5,false); 

function comenzar6() {
elem_origen6=document.getElementById("imagen6");
elem_origen6.addEventListener("dragstart", comenzamos_arrastrar6,false);	
elem_destino3=document.getElementById("ZonaDestino3");	
elem_destino3.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("drop",soltado6, false);
}
function comenzamos_arrastrar6(e) {	
	var codigo="<img src='" + elem_origen6.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado6(e) {
	e.preventDefault();
	elem_destino3.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar6,false);

function comenzar7() {
elem_origen7=document.getElementById("imagen7");
elem_origen7.addEventListener("dragstart", comenzamos_arrastrar7,false);	
elem_destino3=document.getElementById("ZonaDestino3");	
elem_destino3.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("drop",soltado7, false);
}
function comenzamos_arrastrar7(e) {	
	var codigo="<img src='" + elem_origen7.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado7(e) {
	e.preventDefault();
	elem_destino3.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar7,false); 

function comenzar8() {
elem_origen8=document.getElementById("imagen8");
elem_origen8.addEventListener("dragstart", comenzamos_arrastrar8,false);	
elem_destino3=document.getElementById("ZonaDestino3");	
elem_destino3.addEventListener("dragenter", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("dragover", function(e){
	e.preventDefault();}, false);		
elem_destino3.addEventListener("drop",soltado8, false);
}
function comenzamos_arrastrar8(e) {	
	var codigo="<img src='" + elem_origen8.getAttribute("src") +"'>";	
	e.dataTransfer.setData("Text", codigo);	
}
function soltado8(e) {
	e.preventDefault();
	elem_destino3.innerHTML = e.dataTransfer.getData("Text");		
}
window.addEventListener("load", comenzar8,false); 

