<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exemplos de uso com Materilize</title>

        <?php include "../inc/_styles.php"; ?>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <?php include "../inc/_header.php"; ?>

        <section class="section">
            <div class="container">
                <h2>Color</h2>

                <p>
                    <h3>Background Color</h3>

                    <code>
    &lt;div class="card-panel teal lighten-2"&gt;This is a card panel with a teal lighten-2 class&lt;/div&gt;
                    </code>

                    <div class="card-panel teal lighten-2">This is a card panel with a teal lighten-2 class</div>
                </p>

                <p>
                    <h3>Text Color</h3>
                    <code>
    &lt;div class="card-panel"&gt;
    &lt;span class="blue-text text-darken-2"&gt;This is a card panel with dark blue text&lt;/span&gt;
    &lt;/div&gt;
                    </code>
                    <div class="card-panel">
                        <span class="blue-text text-darken-2">This is a card panel with dark blue text</span>
                    </div>
                </p>
            </div>
        </section>

        <div class="divider"></div>

        <section class="section">
            <div class="container">
                <h2>Grid</h2>

                <p>
                    <h3>12 Columns</h3>

                    <code>
                    <pre>
    &lt;div class="row"&gt;
      &lt;div class="col s1"&gt;1&lt;/div&gt;
      &lt;div class="col s1"&gt;2&lt;/div&gt;
      &lt;div class="col s1"&gt;3&lt;/div&gt;
      &lt;div class="col s1"&gt;4&lt;/div&gt;
      &lt;div class="col s1"&gt;5&lt;/div&gt;
      &lt;div class="col s1"&gt;6&lt;/div&gt;
      &lt;div class="col s1"&gt;7&lt;/div&gt;
      &lt;div class="col s1"&gt;8&lt;/div&gt;
      &lt;div class="col s1"&gt;9&lt;/div&gt;
      &lt;div class="col s1"&gt;10&lt;/div&gt;
      &lt;div class="col s1"&gt;11&lt;/div&gt;
      &lt;div class="col s1"&gt;12&lt;/div&gt;
    &lt;/div&gt;
                    </pre>
                    </code>

                    <div class="row">
                      <div class="col s1">1</div>
                      <div class="col s1">2</div>
                      <div class="col s1">3</div>
                      <div class="col s1">4</div>
                      <div class="col s1">5</div>
                      <div class="col s1">6</div>
                      <div class="col s1">7</div>
                      <div class="col s1">8</div>
                      <div class="col s1">9</div>
                      <div class="col s1">10</div>
                      <div class="col s1">11</div>
                      <div class="col s1">12</div>
                    </div>
                </p>

                <p>
                    <h3>Columns live inside Rows</h3>
                    <code>
                    <pre>
    &lt;div class="row"&gt;
      &lt;div class="col s12"&gt;This div is 12-columns wide&lt;/div&gt;
      &lt;div class="col s6"&gt;This div is 6-columns wide&lt;/div&gt;
      &lt;div class="col s6"&gt;This div is 6-columns wide&lt;/div&gt;
    &lt;/div&gt;
                    </pre>
                    </code>

                    <div class="row">
                      <div class="col s12">This div is 12-columns wide</div>
                      <div class="col s6">This div is 6-columns wide</div>
                      <div class="col s6">This div is 6-columns wide</div>
                    </div>
                </p>

                <p>
                    <h3>Offsets</h3>

                    <code>
                    <pre>
    &lt;div class="row"&gt;
      &lt;div class="col s12"&gt;&lt;span class="flow-text"&gt;This div is 12-columns wide on all screen sizes&lt;/span&gt;&lt;/div&gt;
      &lt;div class="col s6 offset-s6"&gt;&lt;span class="flow-text"&gt;6-columns (offset-by-6)&lt;/span&gt;&lt;/div&gt;
    &lt;/div&gt;
                    </pre>
                    </code>

                    <div class="row">
                      <div class="col s12"><span class="flow-text">This div is 12-columns wide on all screen sizes</span></div>
                      <div class="col s6 offset-s6"><span class="flow-text">6-columns (offset-by-6)</span></div>
                    </div>
                </p>

                <p>
                    <h3>Push and Pull</h3>
                    <code>
                    <pre>
    &lt;div class="row"&gt;
      &lt;div class="col s7 push-s5"&gt;&lt;span class="flow-text"&gt;This div is 7-columns wide on pushed to the right by 5-columns.&lt;/span&gt;&lt;/div&gt;
      &lt;div class="col s5 pull-s7"&gt;&lt;span class="flow-text"&gt;5-columns wide pulled to the left by 7-columns.&lt;/span&gt;&lt;/div&gt;
    &lt;/div&gt;
                    </pre>
                    </code>

                    <div class="row">
                      <div class="col s7 push-s5"><span class="flow-text">This div is 7-columns wide on pushed to the right by 5-columns.</span></div>
                      <div class="col s5 pull-s7"><span class="flow-text">5-columns wide pulled to the left by 7-columns.</span></div>
                    </div>
                </p>

                <p>
                    <h3>Creating Layouts</h3>
                    <code>
                    <pre>
    &lt;div class="divider">&lt;/div&gt;
    &lt;div class="section"&gt;
        &lt;h5&gt;Section 1&lt;/h5&gt;
        &lt;p&gt;Stuff&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="divider"&gt;&lt;/div&gt;
    &lt;div class="section"&gt;
        &lt;h5&gt;Section 2&lt;/h5&gt;
        &lt;p&gt;Stuff&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="divider"&gt;&lt;/div&gt;
    &lt;div class="section"&gt;
        &lt;h5&gt;Section 3&lt;/h5&gt;
        &lt;p&gt;Stuff&lt;/p&gt;
    &lt;/div&gt;
                    </pre>
                    </code>

                    <div class="divider"></div>
                    <div class="section">
                        <h5>Section 1</h5>
                        <p>Stuff</p>
                    </div>
                    <div class="divider"></div>
                    <div class="section">
                        <h5>Section 2</h5>
                        <p>Stuff</p>
                    </div>
                    <div class="divider"></div>
                    <div class="section">
                        <h5>Section 3</h5>
                        <p>Stuff</p>
                    </div>
                </p>

                <p>
                    <h3>Adding Responsiveness</h3>
                    <code>
                    <pre>
    &lt;div class="row"&gt;
      &lt;div class="grid-example col s12"&gt;&lt;span class="flow-text"&gt;I am always full-width (col s12)&lt;/span&gt;&lt;/div&gt;
      &lt;div class="grid-example col s12 m6"&gt;&lt;span class="flow-text"&gt;I am full-width on mobile (col s12 m6)&lt;/span&gt;&lt;/div&gt;
    &lt;/div&gt;
                    </pre>
                    </code>
                </p>
            </div>
        </section>

        <div class="divider"></div>

        <section class="section">
            <div class="container">
                <h2>Helpers</h2>

                <p>
                    <h3>Vertical Align</h3>
                    <code>
                        <pre>
    &lt;div class="valign-wrapper" style="height: 100px;background: #eee;"&gt;
      &lt;h5 class="valign"&gt;This should be vertically aligned&lt;/h5&gt;
    &lt;/div&gt;
                        </pre>
                    </code>

                    <div class="valign-wrapper" style="height: 100px;background: #eee;">
                      <h5 class="valign">This should be vertically aligned</h5>
                    </div>
                </p>

                <p>
                    <h3>Text Align</h3>
                    <code>
                        <pre>
    &lt;div&gt;
        &lt;h5 class="left-align"&gt;This should be left aligned&lt;/h5&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;h5 class="right-align"&gt;This should be right aligned&lt;/h5&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;h5 class="center-align"&gt;This should be center aligned&lt;/h5&gt;
    &lt;/div&gt;
                        </pre>
                    </code>

                    <div>
                        <h5 class="left-align">This should be left aligned</h5>
                    </div>
                    <div>
                        <h5 class="right-align">This should be right aligned</h5>
                    </div>
                    <div>
                        <h5 class="center-align">This should be center aligned</h5>
                    </div>
                </p>

                <p>
                    <h3>Truncation</h3>
                    <code>
                        <pre>
    &lt;h4 class="truncate" style="width:200px;"&gt;This is an extremely long title that will be truncated&lt;/h4&gt;
                        </pre>
                    </code>
                    <h4 class="truncate" style="width:200px;">This is an extremely long title that will be truncated</h4>
                </p>

                <p>
                    <h3>Hover</h3>
                    <code>
                    <pre>
    &lt;div class="card-panel hoverable"&gt; Hoverable Card Panel&lt;/div&gt;                        
                    </pre>
                    </code>

                    <div class="card-panel hoverable"> Hoverable Card Panel</div>
                </p>
            </div>

        </section>

        <?php include "../inc/_footer.php"; ?>
        <?php include "../inc/_scripts.php"; ?>

    </body>
</html>
