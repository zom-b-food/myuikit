<!DOCTYPE html>
<html>
    <head>
        <title>Materialize - Documentation</title>
        <? include "../sitewide-mat/globals-top.php"; ?>
    </head>
    <body>

        <? include "../sitewide-mat/header.php"; ?>
        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Forms</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shortcodes</a></li>
                            <li class="active">Forms</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <div class="container">
            <div class="row" id="portion1">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="material-icons prefix">account_circle</i>
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="input-field col s4">
                            <select>
                                <option value="" disabled>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2" selected>Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Materialize Select</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <p>Make sure these textareas are aligned correctly.</p>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="textarea-prefix" class="materialize-textarea"></textarea>
                            <label for="textarea-prefix">Text area with a prefix</label>
                        </div>
                        <div class="input-field col s6">
                            <textarea id="textarea-normal" class="materialize-textarea"></textarea>
                            <label for="textarea-normal">Text area</label>
                        </div>
                    </div>
                    <div class="row">
                        <p>Make sure error message and label don't overlap.</p>

                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate">
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                        </div>
                    </div>
                </form>
            </div>
            <nav>
                <div class="nav-wrapper">
                    <form>
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </nav>
            <br>
            <br>

            <h3>Select</h3>
            <!-- materialize select multiple -->
            <div class="row" id="portion2">
                <div class="input-field col s4">
                    <select multiple>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select Multiple</label>
                </div>
                <!-- second materialize select multiple -->
                <div class="input-field col s4">
                    <select multiple>
                        <option value="" disabled>Choose your option</option>
                        <option value="1" selected>Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3" selected>Option 3</option>
                    </select>
                    <label>Materialize Select Multiple with selected</label>
                </div>
                <!-- materialize select multiple with overflow -->
                <div class="input-field col s4">
                    <select multiple>
                        <option value="" disabled>Choose your option</option>
                        <option value="1" selected>Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                        <option value="5">Option 5</option>
                        <option value="6">Option 6</option>
                        <option value="7">Option 7</option>
                        <option value="8">Option 8</option>
                        <option value="9">Option 9</option>
                        <option value="10">Option 10</option>
                        <option value="11">Option 11</option>
                    </select>
                    <label>Materialize Select Multiple with overflow</label>
                </div>
            </div>
            <!-- select with optgroups -->
            <div class="row">
                <div class="input-field col s4">
                    <select>
                        <optgroup label="team 1">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                        </optgroup>
                        <optgroup label="team 2">
                            <option value="3">Option 3</option>
                            <option value="4">Option 4</option>
                        </optgroup>
                        <optgroup label="team 3">
                            <option value="5" disabled>Option 5</option>
                            <option value="6">Option 6</option>
                        </optgroup>
                    </select>
                    <label>Materialize Select optgroups</label>
                </div>
                <!-- select multiple with optgroups -->
                <div class="input-field col s4">
                    <select multiple>
                        <optgroup label="Cars &amp; Trucks">
                            <option value="6">Lamborgini</option>
                            <option value="7">Ferrari</option>
                        </optgroup>
                        <optgroup label="Electronics">
                            <option value="5">Computers</option>
                            <option value="8">DVD</option>
                        </optgroup>
                        <optgroup label="Toys">
                            <option value="9">Wooden Toys</option>
                            <option value="10">Plush Toys</option>
                        </optgroup>
                    </select>
                    <label>Materialize Multiple Select with optgroups</label>
                </div>
                <!-- select with optgroups -->
                <div class="input-field col s4">
                    <select>
                        <optgroup label="team 1">
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                        </optgroup>
                        <optgroup label="team 2">
                            <option value="3">Option 3</option>
                            <option value="4" selected>Option 4</option>
                        </optgroup>
                        <optgroup label="team 3">
                            <option value="5" disabled>Option 5</option>
                            <option value="6">Option 6</option>
                        </optgroup>
                    </select>
                    <label>Materialize Select optgroups with selected</label>
                </div>
            </div>
            <!-- select with overflow -->
            <div class="row">
                <div class="input-field col s6">
                    <select>
                        <option value="" disabled>Choose your option</option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                    <label>Materialize Select with overflow</label>
                </div>
                <div class="input-field col s6">
                    <select id="optgroups-select">
                        <option>Option before optgroup</option>
                        <optgroup label="Optgroup">
                            <option>Option inside optigroup 1</option>
                            <option>Option inside optigroup 2</option>
                        </optgroup>
                        <option>Option after optgroup</option>
                    </select>
                    <label>Optgroup in the middle of non optgroup options.</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    This is an inline select:
                    <div class="input-field inline">
                        <select>
                            <option value="" disabled>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2" selected>Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        <label>Materialize Select</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2>Select Icons</h2>

                <div class="input-field col s12">
                    <select multiple>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1" data-icon="http://placehold.it/50x50" class="circle">Option 1</option>
                        <option value="2" data-icon="http://placehold.it/50x50" class="circle right">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select Multiple</label>
                </div>
                <div class="input-field col s12">
                    <select>
                        <optgroup label="team 1">
                            <option value="1" data-icon="http://placehold.it/50x50" class="circle">Option 1</option>
                            <option value="2">Option 2</option>
                        </optgroup>
                        <optgroup label="team 2">
                            <option value="3" data-icon="http://placehold.it/50x50" class="circle right">Option 3
                            </option>
                            <option value="4" selected>Option 4</option>
                        </optgroup>
                        <optgroup label="team 3">
                            <option value="5" disabled>Option 5</option>
                            <option value="6">Option 6</option>
                        </optgroup>
                    </select>
                    <label>Materialize Select Multiple</label>
                </div>
            </div>
            <h2>Range</h2>

            <div class="row">
                <div class="col s12">
                    <form action="#" class="row">
                        <p class="range-field col s6">
                            <input type="range" id="test5" min="0" max="100"/>
                        </p>
                    </form>
                    <form action="#">
                        <p class="range-field">
                            <input type="range" id="test5" min="0" max="100"/>
                        </p>
                    </form>
                    <form action="#">
                        <p class="range-field">
                            <input type="range" id="test5" min="-50" max="150"/>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class="links-sites">
            <a href="http://www.adam-marsh.com">Adam L Marsh www.adam-marsh.com</a>
            <a href="http://www.adam-marsh.com">Adam L Marsh http://www.adam-marsh.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh www.ui-design-engineering.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh http://www.ui-design-engineering.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                www.irisandpith.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                http://www.irisandpith.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh www.myuikit.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh http://www.myuikit.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles</a>
        </div>
        <? include "../sitewide-mat/footer.php"; ?>
        <? include "../sitewide-mat/globals-bottom.php"; ?>
        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </body>
</html>
