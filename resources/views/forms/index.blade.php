@include('header')

<div class="row">
    <div class="col-12">
        <form action="" method="post">
            @csrf
            <input type="date" name="date" id="date">
            <button>Generate</button>
        </form>

        <div>
            <?= $html_data;?>
        </div>
    </div>
</div>

@include('footer')