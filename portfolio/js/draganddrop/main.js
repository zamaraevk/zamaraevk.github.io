var app;
$(function() {
  app = {
    server: 'http://jsonplaceholder.typicode.com',

    init: function() {
      app.getUsers();
      app.getAlbums();
    },
    getUsers: function() {
      $.ajax({
        url: app.server + '/users?id=1&id=2',
        method: 'GET'
      }).then(function(data) {
          console.log(data);
          app.appendUserTitles(data);
      });
    },
    getAlbums: function() {
      $.ajax({
        url: app.server + '/albums?userId=1&userId=2',
        method: 'GET'
      }).then(function(data) {
          app.appendUserAlbums(data);
      });
    },
    appendUserTitles: function(data) {
      if(!Array.isArray(data)) console.log('wrong data format')
      else {
        data.forEach((user) => {
          if(user.id === 1){
            $("#user1").html(user.name);
          } else {
            $("#user2").html(user.name);
          }
        })
      }
    },
    appendUserAlbums: function(data) {
      if(!Array.isArray(data)) console.log('wrong data format')
      else {
        data.forEach((item) => {
          if(item.userId === 1){
            $("#table-draggable1 .connectedSortable").append('<div class="row ui-widget-content"><div class="albumId">' + item.id + '</div><div class="title">' + item.title + '</div></div>');
          } else {
            $("#table-draggable2 .connectedSortable").append('<div class="row ui-widget-content"><div class="albumId">' + item.id + '</div><div class="title">' + item.title + '</div></div>');
          }
        })
      }
    }
  };
}());
