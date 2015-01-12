<div class="list-group no-radius alt">
    @foreach($labels as $label)
        <a class="list-group-item" href="#">
            <span class="badge bg-danger">{{ $types[$label->type_id] }}</span>
            <?php echo (isset($label->label ) ? $label->label  : '&nbsp;'); ?>
        </a>
    @endforeach


<article class="media">
    <div class="media-body">
        <div class="pull-right media-xs text-center">
            <strong class="h5">{{ $types[$label->type_id] }}</strong><br>
        </div>
        <p class="h5 text-info">{{ $host->label }}</p>
    </div>
</article>