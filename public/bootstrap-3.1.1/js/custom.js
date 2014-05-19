/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(function(){
    $(".img1-col4").hover(function(){
        $(this).children("div").children("img").animate({
            opacity: '0.5'
        },300);
        $(this).children(".overlay1")
        .animate({
            opacity: '1'
        },300);
    }, function(){
        $(this).children("div").children("img").animate({
            opacity: '1'
        },300);
        $(this).children(".overlay1")
        .animate({
            opacity: '0'
        },100);
    });
    
    $(".img2-col4").hover(function(){
        $(".overlay2").show();
        $(this).children("div").children("img").animate({
            opacity: '0.5'
        },300);
        $(this).children(".overlay2")
        .animate({
            opacity: '1'
        },300);
    }, function(){
        $(this).children("div").children("img").animate({
            opacity: '1'
        },300);
        $(this).children(".overlay2")
        .animate({
            opacity: '0'
        },100);
    });
    
});