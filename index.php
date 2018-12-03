<html>
<head>
  <title>Minimal base</title>
  <link rel="stylesheet" type="text/css" href="dist/styles/style.min.css">
</head>
<body>
  <header>
    <h1>Minimal base</h1>
  </header>
  <section>
    <h2>Colors</h2>
    <style>
      td {
        padding: 10px 20px;
      }
    </style>
    <table>
      <tr>
        <td class="has-bg--gray-lightest">T</td>
        <td class="has-bg--gray-light">T</td>
        <td class="has-bg--gray">T</td>
        <td class="has-bg--gray-dark">T</td>
        <td class="has-bg--gray-darkest">T</td>
      </tr>
      <tr>
        <td class="has-bg--primary-light">T</td>
        <td class="has-bg--secondary-light">T</td>
        <td class="has-bg--tertiary-light">T</td>
        <td class="has-bg--success-light">T</td>
        <td class="has-bg--info-light">T</td>
        <td class="has-bg--warning-light">T</td>
        <td class="has-bg--error-light">T</td>
      </tr>
      <tr>
        <td class="has-bg--primary">T</td>
        <td class="has-bg--secondary">T</td>
        <td class="has-bg--tertiary">T</td>
        <td class="has-bg--success">T</td>
        <td class="has-bg--info">T</td>
        <td class="has-bg--warning">T</td>
        <td class="has-bg--error">T</td>
      </tr>
      <tr>
        <td class="has-bg--primary-dark">T</td>
        <td class="has-bg--secondary-dark">T</td>
        <td class="has-bg--tertiary-dark">T</td>
        <td class="has-bg--success-dark">T</td>
        <td class="has-bg--info-dark">T</td>
        <td class="has-bg--warning-dark">T</td>
        <td class="has-bg--error-dark">T</td>
      </tr>
    </table>
  </section>



  <section>
    <h2>Typohraphy</h2>
    <p class="h1">Headline 1 <small>Subline</small></p>
    <p class="h2">Headline 2 <small>Subline</small></p>
    <p class="h3">Headline 3 <small>Subline</small></p>
    <p class="h4">Headline 4 <small>Subline</small></p>
    <p class="h5">Headline 5 <small>Subline</small></p>
    <p class="h6">Headline 6 <small>Subline</small></p>
    <p class="preamble">Preamble <small>Subline</small></p>
    <p>Paragraph</p>
    <blockquote class="quote">Some quote <cite class="quote__cite">by Someone</cite></blockquote>

    <ul class="list">
      <li class="list__item">unsorted</li>
      <li class="list__item">list</li>
    </ul>

    <ol class="list">
      <li class="list__item">sorted</li>
      <li class="list__item">list</li>
    </ol>

    <dl class="list">
      <dt class="list__item">Definition</dt>
      <dd class="list__item">list</dd>
    </dl>
  </section>

  <section>
    <h2>Components</h2>
    
    <section>
      <h3>Buttons</h3>
      <button class="btn is-sm">Small</button>
      <button class="btn">Default</button>
      <a href="#" class="btn">Link</a>
      <button class="btn" disabled>Default</button>
      <button class="btn is-loading" >Default</button>
      <button class="btn is-md">Medium</button>
      <button class="btn is-lg">Large</button>
      <section>
      <div style="background:#000; padding:0 10px 10px 10px; margin:10px 0;">
        <button class="btn is-inv">Inverted</button>
      </div>
      <div class="btn-group btn-group--toggle">
        <button class="btn is-active">Yes</button>
        <button class="btn">Maybe</button>
        <button class="btn">No</button>
      </div>
      <div class="btn-group">
        <button class="btn btn--primary">Primary</button>
        <button class="btn btn--secondary">Secondary</button>
        <button class="btn btn--tertiary">Tertiary</button>
        <button class="btn btn--gray">gray</button>
        <button class="btn btn--success">Success</button>
        <button class="btn btn--info">Info</button>
        <button class="btn btn--warning">Warning</button>
        <button class="btn btn--error">Error</button>
      </div>
      <div class="btn-group">
        <button class="btn btn--outline-primary">Primary</button>
        <button class="btn btn--outline-secondary">Secondary</button>
        <button class="btn btn--outline-tertiary">Tertiary</button>
        <button class="btn btn--outline-gray">gray</button>
        <button class="btn btn--outline-success">Success</button>
        <button class="btn btn--outline-info">Info</button>
        <button class="btn btn--outline-warning">Warning</button>
        <button class="btn btn--outline-error">Error</button>
      </div>
    </section>

    <section>
      <h3>Lists</h3>
      <ul class="list list--unstyled">
        <li class="list__item">unstyled</li>
        <li class="list__item">unsorted</li>
        <li class="list__item">list</li>
      </ul>
    </section>

    <section>
      <h3>Forms</h3>
      <form class="form form--inline">

        <label class="form__item">
          <span class="form__label">Firstname</span>
          <input class="form__input" name="firstname" type="text">
        </label>

        <label class="form__item">
          <span class="form__label">Search</span>
          <input class="form__input" name="firstname" type="search">
        </label>

      </form>

      <form class="form">

        <label class="form__item is-disabled">
          <span class="form__label">Disabled</span>
          <input class="form__input" name="firstname" type="text" disabled>
        </label>

        <label class="form__item has-error">
          <span class="form__label">Error</span>
          <input class="form__input" name="firstname" type="text">
          <span class="form__message">Name is required.</span>
        </label>

        <label class="form__item has-success">
          <span class="form__label">Success</span>
          <input class="form__input" name="firstname" type="text">
        </label>

        <label class="form__item">
          <span class="form__label">Write a message</span>
          <textarea class="form__textarea"></textarea>
        </label>

        <label class="form__item">
          <span class="form__label">Select value</span>
          <select class="form__select" name="list">
            <option value="0">Lorem</option>
            <option value="1">Ipsum</option>
            <option value="2">Dolot</option>
          </select>
        </label>

        <label class="form__item">
          <input class="form__checkbox" name="term" type="checkbox">
          <span class="form__label">I agree to <a href="#">terms & conditions</a></span>
        </label>

        <label class="form__item form__item--checkbox has-error">
          <input class="form__checkbox" name="customterm" type="checkbox">
          <span class="form__tick" aria-hidden="true"></span>
          <span class="form__label">I agree to <a href="#">terms & conditions</a></span>
          <span class="form__message">Terms is required.</span>

        </label>



        <fieldset class="form__group">
          <legend class="form__label form__legend">Choose your favorite monster</legend>

          <label class="form__item">
            <input class="form__radio" type="radio" name="monster" value="kraken" checked>
            <span class="form__label">Kraken</span>
          </label>

          <label class="form__item">
            <input class="form__radio" type="radio" name="monster" value="sasquatch">
            <span class="form__label">Sasquatch</span>
          </label>

          <label class="form__item">
            <input class="form__radio" type="radio" name="monster" value="mothman">
            <span class="form__label">Mothman</span>
          </label>

        </fieldset>


        <fieldset class="form__group">
          <legend class="form__label form__legend">Choose your favorite monster custom radio</legend>

          <label class="form__item form__item--radio">
            <input class="form__radio" name="custommonster" type="radio" value="kraken" checked>
            <span class="form__tick" aria-hidden="true"></span>
            <span class="form__label">Kraken</span>
          </label>
          <label class="form__item form__item--radio">
            <input class="form__radio" name="custommonster" type="radio" value="sasquatch">
            <span class="form__tick" aria-hidden="true"></span>
            <span class="form__label">Sasquatch</span>
          </label>
          <label class="form__item form__item--radio">
            <input class="form__radio" name="custommonster" type="radio" value="mothman">
            <span class="form__tick" aria-hidden="true"></span>
            <span class="form__label">Mothman</span>
          </label>
        </fieldset>

        <div class="form__item">
          <input type="button" onclick="alert('Hello World!')" value="Click Me!">
          <input type="submit" value="Submit">
          <input type="reset">
        </div>

        <div class="form__result">
          <div class="form__result__message has-error">Name is required. Focus invalid input</a>
          <div class="form__result__message has-error">Accept term is required. Focus invalid input</div>

          <div class="form__result__message has-success">Successfully submitted</div>
        </div>

      </form>
    </section>
  </section>
</body>
</html>
