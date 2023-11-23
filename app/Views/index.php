<div class="row pt-md-4">
  <?php if (count($posts)): ?>
    <?php foreach ($posts as $post): ?>
      <div class="col-md-12">
        <div class="blog-entry ftco-animate d-md-flex">
          <a href="single.html" class="img img-2" style="background-image: url(<?php echo site_url('assets/images/'.$post->image); ?>);"></a>
          <div class="text text-2 pl-md-4">
            <h3 class="mb-2"><a href="<?php echo site_url('blog/post/'.$post->id); ?>"><?php echo $post->title ?></a></h3>
            <div class="meta-wrap">
              <p class="meta">
                <!-- strftime('%d %B, %Y', strtotime($post->created_at)); -->
                <!-- date('d F, Y', strtotime($post->created_at)); -->
                <span><i class="icon-calendar mr-2"></i><?php echo format_date($post->created_at) ?></span>
                <span><a href="<?php echo site_url('blog/category/'.$post->category_id); ?>"><i class="icon-folder-o mr-2"></i><?php echo $post->name ?></a></span>
                <span><i class="icon-user mr-2"></i>Por <?php echo $post->author ?></span>
              </p>
            </div>
            <p class="mb-4"><?php echo limit_numwords($post->body, 16) ?></p>
            <p><a href="<?php echo site_url('blog/post/'.$post->id); ?>" class="btn-custom">Leer Más <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  <?php else: ?>
      <div class="col-md-12">
        <div class="blog-entry ftco-animate d-md-flex">
          <p>No hay articulos</p>
        </div>
      </div>
  <?php endif ?>
</div><!-- END-->