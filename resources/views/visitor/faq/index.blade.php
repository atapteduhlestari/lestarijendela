@extends('layouts.visitor.master')
@section('title', 'FAQ | Lestari Jendela')
@section('content')

<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <h3 class="mb-3">FAQ</h3>
        <div class="card">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <?php $row_count = 1; for ($x = 0; $x < count($faqs); $x++) {  ?>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading<?php echo $faqs; ?>">
                        <h4 class="panel-title">
                            <div class="card">
                                <div class="card-body">

                                    <a role="button" class="btn btn-link text-dark" data-toggle="collapse"
                                        data-parent="#accordion" href="#collapse<?php echo $row_count; ?>"
                                        aria-expanded="false">
                                        {{ $row_count }} . {{ $faqs[$x]['question'] }}
                                    </a>
                                    
                                </div>
                            </div>
                        </h4>
                    </div>

                    <div id="collapse<?php echo $row_count; ?>" class="panel-collapse collapse " role="tabpanel"
                        aria-labelledby="heading<?php echo $row_count; ?>">
                        <div class="panel-body">
                            <div class="card">
                                <div class="card-body">

                                    {{ $faqs[$x]['answer'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $row_count++; } ?>
            </div>
        </div>
    </div>
</section>

@endsection