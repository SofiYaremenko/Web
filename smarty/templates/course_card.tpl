{foreach from=$myArray item=course}
<div class="col-md-6">
      <div class="card">
          <img class="card-img-top" src="{$course.getImg()}" alt="Card image cap">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
              <h4 class="card-title">{$course.getTitle()}</h4>
            </div>
          </div>
          <div class="card-body">
              <p class="card-text">{$course.getDescription()}</p>
    <a href="#" class="btn btn-primary btn-round">Go to course</a>
          </div>
      </div>
</div>
{/foreach}