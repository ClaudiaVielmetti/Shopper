<?php $this->view("header", $data); ?>

<h1 class="book-head"> Our LookBook</h1>
<div class="lookbook">
    <button id="prev-btn">
        <i class="fas fa-arrow-circle-left"></i>
    </button>

    <!--Book-->
    <div id="book" class="book">
        <!--page 1-->
        <div id="p1" class="paper ">
            <div class="front">
                <div id="f1" class="front-content">
                    <h1>Front 1</h1>
                </div>
            </div>
            <div class="back">
                <div id="b1" class="back-content">
                    <h1>Back 1</h1>
                </div>
            </div>
        </div>
        <!--page 2-->
        <div id="p2" class="paper">
            <div class="front">
                <div id="f2" class="front-content">
                    <h1>Front 2</h1>
                </div>
            </div>
            <div class="back">
                <div id="b2" class="back-content">
                    <h1>Back 2</h1>
                </div>
            </div>
        </div>
        <!--page 3-->
        <div id="p3" class="paper">
            <div class="front">
                <div id="f3" class="front-content">
                    <h1>Front 3</h1>
                </div>
            </div>
            <div class="back">
                <div id="b3" class="back-content">
                    <h1>Back 3</h1>
                </div>
            </div>
        </div>
        <!--page 4-->
        <div id="p4" class="paper">
            <div class="front">
                <div id="f4" class="front-content">
                    <h1>Front 4</h1>
                </div>
            </div>
            <div class="back">
                <div id="b4" class="back-content">
                    <h1>Back 4</h1>
                </div>
            </div>
        </div>
        <!--page 5-->
        <div id="p5" class="paper">
            <div class="front">
                <div id="f5" class="front-content">
                    <h1>Front 5</h1>
                </div>
            </div>
            <div class="back">
                <div id="b5" class="back-content">
                    <h1>Back 5</h1>
                </div>
            </div>
        </div>
    </div>
    <button id="next-btn">
        <i class="fas fa-arrow-circle-right"></i>
    </button>
</div>

<!-- Scripts -->
<script src="/JS/script.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/material-ui/5.0.0-beta.5/index.js" integrity="sha512-uKxirna7d5STmVXEMQYBVRW1nERrqHjwOubv4QcK4oYaaifLiEnN/aLIJxVsyK4R1K+awpNIG73RaQfT1DZ8ew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php $this->view("footer", $data); ?>