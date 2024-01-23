/**
 * Theme: Opatix - Admin & Dashboard Template
 * Author: Myra Studio
 * File: Main Js
 */


(function ($) {

    'use strict';

    function initMetisMenu() {
        //metis menu
        $("#side-menu").metisMenu();
    }

    function initLeftMenuCollapse() {
        // Left menu collapse
        $('#vertical-menu-btn').on('click', function () {
            $('body').toggleClass('enable-vertical-menu');
        });

        $('.menu-overlay').on('click', function () {
            $('body').removeClass('enable-vertical-menu');
            return;
        });
    }

    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $("#sidebar-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("mm-active"); // add active to li of the current link
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
            }
        });
    }

    function initComponents() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    }

    function init() {
        initMetisMenu();
        initLeftMenuCollapse();
        initActiveMenu();
        initComponents();
        Waves.init();
    }

    init();

})(jQuery)


document.addEventListener("DOMContentLoaded", function () {
      var fnameInput = document.getElementById("fname");
      var lnameInput = document.getElementById("lname");
      var email = document.getElementById("email");
      var number = document.getElementById("number");

      fnameInput.addEventListener("input", function () {
          if (this.value.trim() !== "") {
              this.classList.remove("is-invalid");
          }
      });
  });

  function validateForm() {
      var fname = document.forms["myForm"]["fname"].value;
      var lname = document.forms["myForm"]["lname"].value;
      var email = document.forms["myForm"]["email"].value;
      var number = document.forms["myForm"]["number"].value;

      var fnameInput = document.getElementById("fname");
      var lnameInput = document.getElementById("lname");
      var emailInput = document.getElementById("email");
      var numberInput = document.getElementById("number");

      if (fname.trim() === "") {
          fnameInput.classList.add("is-invalid");
          return false;
      }
      if (lname.trim() === "") {
          lnameInput.classList.add("is-invalid");
          return false;
      }
      if (email.trim() === "") {
          emailInput.classList.add("is-invalid");
          return false;
      }
      if (number.trim() === "") {
          numberInput.classList.add("is-invalid");
          return false;
      }

      return true;
  }
