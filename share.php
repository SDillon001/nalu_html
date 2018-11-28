<!doctype html>
<html>

<!--Included head.php file -->
<?php include("head.php");?>
<title><?php echo $title ?>Share</title>

<body>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Init jquery-comments -->
    <script type="text/javascript">
      $(function() {
        var saveComment = function(data) {

          // Convert pings to human readable format
          $(data.pings).each(function(index, id) {
            var user = usersArray.filter(function(user){return user.id == id})[0];
            data.content = data.content.replace('@' + id, '@' + user.fullname);
          });

          return data;
        }
        $('#comments-container').comments({
          profilePictureURL: 'https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png',
          currentUserId: 1,
          roundProfilePictures: true,
          textareaRows: 1,
          enableAttachments: true,
          enableHashtags: true,
          enablePinging: true,
          getUsers: function(success, error) {
            setTimeout(function() {
              success(usersArray);
            }, 500);
          },
          getComments: function(success, error) {
            setTimeout(function() {
              success(commentsArray);
            }, 500);
          },
          postComment: function(data, success, error) {
            setTimeout(function() {
              success(saveComment(data));
            }, 500);
          },
          putComment: function(data, success, error) {
            setTimeout(function() {
              success(saveComment(data));
            }, 500);
          },
          deleteComment: function(data, success, error) {
            setTimeout(function() {
              success();
            }, 500);
          },
          upvoteComment: function(data, success, error) {
            setTimeout(function() {
              success(data);
            }, 500);
          },
          uploadAttachments: function(dataArray, success, error) {
            setTimeout(function() {
              success(dataArray);
            }, 500);
          },
        });
      });
    </script>

  <!--Included Header php file -->
  <?php include("header-include_v2.php");?>

  <!-- Start Updated Content -->
  <div class="wrapper">
    <div class="title-head box corner-shadow">
      <h1>Share Your Story</h1>
    </div>

    <div id="comments-container"></div>

    <div class="banner-image">

    <div class="about content">
      <h2>Share the Stoke Here</h2>
      <p class="about text">This website for surfers and non-surfers alike who love the sport of surfing and the culture that surrounds it. Login with your favorite online account and share your surfing story below.</p>

      <div class="disqus-input" disqus="contact"></div>
    </div>
  </div>

  <!--Included Header php file -->
  <?php include("footer-include.php");?>
</body>

</html>
