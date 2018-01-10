(function(){
  "use strict";

  var Pages = function() {

    if(Pages.instance) {
      return Pages.instance;
    }

    this.script_root = 'http://projecty.codeloops.ee';

    Pages.instance = this;

    this.init();
    };

    window.Pages = Pages;


    Pages.prototype = {
      init: function() {
        console.log("a");
        this.listenEvents();

      },

      listenEvents: function() {
        $("#create_page").click(this.getNewPageData);
      },

      getNewPageData: function() {
        var name = $("#page_name").val();
        var url = $("#page_url").val();
        var title = $("#page_title").val();
        var rights = $("#page_rights").val();
        var icon = $("#page_icon").val();

        Pages.instance.createPage(name, url, title, rights, icon);
      },

      createPage: function(name, url, title, rights, icon) {
        $.ajax({
            url: Pages.instance.script_root + '/ajax.php?newpage=1&title=' + title + '&name=' + name + '&url=' + url + '&rights=' + rights + '&icon=' + icon,
            type: 'get',
            async: false,
            success: function(result){
                $('#add_page_modal').modal('toggle');
                $('#side_nav').append('<li><a href="' + Pages.instance.script_root + '/pages/' + url + '.php"><i class="fa fa-' + icon + '"></i><span>' + name + '</span></li>');
                $("#page_name").val("");
                $("#page_url").val("");
                $("#page_title").val("");
                $("#page_rights").val("").trigger('change');
                $("#page_icon").val("");
            },
            error: function(result){
                console.log(result);
            }
        });
      },






    };








}) ();
