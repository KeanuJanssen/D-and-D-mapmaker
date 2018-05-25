
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.$ = window.jQuery = require('jquery');
window.$ = $.extend(require('jquery-ui-bundle'));

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



$( document ).ready(function() {
    
    // background-manager.js
    var sPath = window.location.pathname;
    var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);

    if (sPage == 'login' || sPage == 'register') {

        let backgroundElement = document.getElementById("background-wrapper");
        backgroundElement.classList.add("background-wrapper");

        console.log(sPage);

    }

    //drag and drop elements ***OLD***
    /*console.log('The drag and drop script is active');
    window.allowDrop = function (de) {
        de.preventDefault();
        console.log('allowDrop() Triggerd');
    }
    
    window.drag = function (de) {
        de.dataTransfer.setData("text", de.target.id);
        console.log('drag() Triggerd');
    }
    
    window.drop = function (de) {
        de.preventDefault();
        var data = de.dataTransfer.getData("text");
        de.target.appendChild(document.getElementById(data));
        console.log('drop() Triggerd');
    }*/

    //drag and drop elements
    $('.sub-sprite').draggable({ revert: true, revertDuration: 0 });
    $('.sprite-slot').droppable({
        drop: function( event, ui ) {
            let backgroundImage = ui.draggable.attr('src');
            console.log(backgroundImage);
          $( this ).css("background-image", 'url('+backgroundImage+')');
        }
    });

    // Click and drop elements
    selectedSprite = '';

    $('.sub-sprite').click(function ( data ) {
        selectedSprite = this.getAttribute("src");
        console.log(selectedSprite);
    });

    $('.sprite-slot').mousedown(function ( data ) {
        $(this).css('background-image', 'url('+ selectedSprite +')');
    });

    $('#gum-button').click(function ( data ) {
        selectedSprite = '';
    });

    //Click on main sprites
    $('#sprite-catagory-doors').click(function ( ) {
        $('#door-sprites').css('display', 'flex');
        $('#wall-sprites').css('display', 'none');
        $('#stair-sprites').css('display', 'none');
        $('#floor-sprites').css('display', 'none');
        $('#chest-sprites').css('display', 'none');
        $('#water-sprites').css('display', 'none');
    });

    $('#sprite-catagory-walls').click(function ( ) {
        $('#door-sprites').css('display', 'none');
        $('#wall-sprites').css('display', 'flex');
        $('#stair-sprites').css('display', 'none');
        $('#floor-sprites').css('display', 'none');
        $('#chest-sprites').css('display', 'none');
        $('#water-sprites').css('display', 'none');
    });

    $('#sprite-catagory-stairs').click(function ( ) {
        $('#door-sprites').css('display', 'none');
        $('#wall-sprites').css('display', 'none');
        $('#stair-sprites').css('display', 'flex');
        $('#floor-sprites').css('display', 'none');
        $('#chest-sprites').css('display', 'none');
        $('#water-sprites').css('display', 'none');
    });

    $('#sprite-catagory-floors').click(function ( ) {
        $('#door-sprites').css('display', 'none');
        $('#wall-sprites').css('display', 'none');
        $('#stair-sprites').css('display', 'none');
        $('#floor-sprites').css('display', 'flex');
        $('#chest-sprites').css('display', 'none');
        $('#water-sprites').css('display', 'none');
    });

    $('#sprite-catagory-chests').click(function ( ) {
        $('#door-sprites').css('display', 'none');
        $('#wall-sprites').css('display', 'none');
        $('#stair-sprites').css('display', 'none');
        $('#floor-sprites').css('display', 'none');
        $('#chest-sprites').css('display', 'flex');
        $('#water-sprites').css('display', 'none');
    });

    $('#sprite-catagory-water').click(function ( ) {
        $('#door-sprites').css('display', 'none');
        $('#wall-sprites').css('display', 'none');
        $('#stair-sprites').css('display', 'none');
        $('#floor-sprites').css('display', 'none');
        $('#chest-sprites').css('display', 'none');
        $('#water-sprites').css('display', 'flex');
    });

});

