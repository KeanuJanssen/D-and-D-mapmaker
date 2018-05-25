
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
            let spriteId = ui.draggable.attr("id").match(/\d+/)[0];
          $( this ).css("background-image", 'url('+backgroundImage+')');
          $( this ).attr('sprite', spriteId)
        }
    });

    // Click and drop elements
    selectedSprite = '';
    selectedSpriteId = '0';

    $('.sub-sprite').click(function ( data ) {
        selectedSprite = this.getAttribute("src");
        selectedSpriteId = this.getAttribute("id").match(/\d+/)[0];
    });

    $('.sprite-slot').mousedown(function ( data ) {
        $(this).css('background-image', 'url('+ selectedSprite +')');
        $(this).attr('sprite', selectedSpriteId);
    });

    $('#gum-button').click(function ( data ) {
        selectedSprite = '';
        selectedSpriteId = '0';
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

    //PDF test
    $('#download-button').click(function() {
        var options = {};
        var pdf = new jsPDF('landscape', 'pt', 'a4');
        pdf.addHTML($("#the-map"), 15, 15, options, function() {
          pdf.save('MyMap.pdf');
        });
    });

    // Create array from sprites
    $('#opslaan-button').click(function() {

        var gridArray = [];

        if ($('#slot-140').length) {    
            var mapSize = 140;
        } else if ($('#slot-88').length) {
            var mapSize = 88;
        } else {
            var mapSize = 63;
        }

        var gridArray = [];
        var i = 1;
        while (i <= mapSize) {
            var usedSprite = $('#slot-'+i).attr('sprite');
            gridArray.push(usedSprite);
            i++;
        }
        console.log(gridArray.join);
    });

});

