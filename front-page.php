<?php
/**
* Template Name: Front Page
*
* @package Labmatilde
* @subpackage lam
* @since Lar Assistencial Matilde 1.0
*/
 
get_header(); 
?>

    <ul id="slide-out" class="side-nav">
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li class="bold">
            <a class="collapsible-header waves-effect waves-teal active">Pages</a>
            <div class="collapsible-body">
              <ul>
                <li><a class="active" href="horizontal-half.html">Horizontal Halves</a></li>
                <li><a href="sierra.html">Zoom Out</a></li>
                <li><a href="circle-reveal.html">Circle Reveal</a></li>
                <li><a href="phone-wall.html">Phone Wall</a></li>
                <li><a href="element-transitions.html">Element Transitions</a></li>
                <li><a href="basic-elements.html">Basic Elements</a></li>
                <li><a href="card-shuffle.html">Shuffle</a></li>
                <li><a href="postcards.html">Postcards</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
      <li><a class="waves-effect waves-teal" href="blog.html">Blog</a></li>
      <li><a class="waves-effect waves-teal" href="team.html">Team</a></li>
      <li><a class="waves-effect waves-teal" href="docs/about.html">Docs</a></li>
      <li><a class="waves-effect waves-teal" href="#">Buy Now!</a></li>
    </ul>

    <div class="header full-height horizontal-half-transition">
      <div class="background">
        <img src="http://placehold.it/1440x900" alt="">
      </div>
      <div class="phone-preview-sizer">
        <div class="phone-preview"></div>
        <div class="image-container active" style="background-image:url(http://placehold.it/530x990)"></div>
        <div class="image-container" style="background-image:url(http://placehold.it/530x990)"></div>
        <div class="image-container" style="background-image:url(http://placehold.it/530x990)"></div>
      </div>
      <div class="horizontal-half-wrapper right-side active">
        <div class="header-background white"></div>
        <div class="header-wrapper row valign-wrapper">
          <div class="col s12 m8 offset-m2 valign">
            <h1>Startup!</h1>
            <span class="tagline">Show off your business in a whole new way.</span>
            <button class="read-more"><i class="icon-caret-down"></i></button>
          </div>
        </div>
      </div>
      <div class="horizontal-half-wrapper">
        <div class="header-background white"></div>
        <div class="header-wrapper row valign-wrapper">
          <div class="col s12 m8 offset-m2 valign">
            <h1>Second!</h1>
            <span class="tagline">Second tagline with more information.</span>
            <button class="read-more"><i class="icon-caret-down"></i></button>
          </div>
        </div>
      </div>
      <div class="horizontal-half-wrapper right-side">
        <div class="header-background white"></div>
        <div class="header-wrapper row valign-wrapper">
          <div class="col s12 m8 offset-m2 valign">
            <h1>Third!</h1>
            <span class="tagline">Third tagline with more information.</span>
            <button class="read-more"><i class="icon-caret-down"></i></button>
          </div>
        </div>
      </div>
    </div>

    <div class="section valign-wrapper">
      <div class="row valign">
        <div class="col s12 m10 offset-m1">
          <div class="row">
            <div class="col s12"><h2 class="section-title">Features</h2></div>
            <div class="col s12 m6 l4">
              <h4><i class="icon-light-bulb"></i></h4>
              <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
            </div>
            <div class="col s12 m6 l4">
              <h4><i class="icon-bolt"></i></h4>
              <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
            </div>
            <div class="col s12 m6 l4">
              <h4><i class="icon-rocket"></i></h4>
              <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
            </div>
            <div class="col s12 m6 l4">
              <h4><i class="icon-settings"></i></h4>
              <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
            </div>
            <div class="col s12 m6 l4">
              <h4><i class="icon-umbrella"></i></h4>
              <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
            </div>
            <div class="col s12 m6 l4">
              <h4><i class="icon-compass"></i></h4>
              <p class="caption">This is a cool feature about your product! It really separates you from the crowd.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Pricing Tables -->
    <div class="section valign-wrapper">
      <div class="row valign">
        <div class="col s12 m10 offset-m1">
          <div class="row">
            <div class="col s12 m4">
              <div class="pricing-table">
                <div class="pricing-header">
                  <i class="icon-paper-plane"></i>
                  <h4>Basic</h4>
                  <div class="price">
                    <span class="currency">$</span>
                    <span class="dollars">9</span>
                    <span class="cents">99</span>
                  </div>
                </div>
                <ul class="pricing-features">
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Pro and above.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                </ul>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="pricing-table featured">
                <div class="pricing-header">
                  <i class="icon-plane"></i>
                  <h4>Pro</h4>
                  <div class="price">
                    <span class="currency">$</span>
                    <span class="dollars">59</span>
                    <span class="cents">99</span>
                  </div>
                </div>
                <ul class="pricing-features">
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>Pro and above.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                  <li class="pricing-feature disabled"><i class="icon-close"></i>Enterprise only.</li>
                </ul>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="pricing-table">
                <div class="pricing-header">
                  <i class="icon-rocket"></i>
                  <h4>Enterprise</h4>
                  <div class="price">
                    <span class="currency">$</span>
                    <span class="dollars">299</span>
                    <span class="cents">99</span>
                  </div>
                </div>
                <ul class="pricing-features">
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>10 product uses.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>Enterprise only.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>Enterprise only.</li>
                  <li class="pricing-feature"><i class="icon-accept"></i>Enterprise only.</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

<div class="section light full-height">
    <div class="row">
    <div class="col s12 m10 offset-m1 center">
        <h1>blog</h1>
        <div class="row masonry-grid">
        <div class="col s12 m6 l4">
            <div class="card">
            <div class="card-image">
                <a href="blog.html"><img src="http://placehold.it/600x400"></a>
                <span class="card-title">Something Interesting</span>
            </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
            <div class="card-image">
                <a href="blog.html"><img src="http://placehold.it/600x400"></a>
                <span class="card-title">Another Blog Post</span>
            </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
            <div class="card-image">
                <a href="blog.html"><img src="http://placehold.it/600x400"></a>
                <span class="card-title">Click Bait Article</span>
            </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
            <div class="card-image">
                <a href="blog.html"><img src="http://placehold.it/600x400"></a>
                <span class="card-title">Don't Read This!</span>
            </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
            <div class="card-image">
                <a href="blog.html"><img src="http://placehold.it/600x400"></a>
                <span class="card-title">Why Are You Still Reading?</span>
            </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
            <div class="card-image">
                <a href="blog.html"><img src="http://placehold.it/600x400"></a>
                <span class="card-title">Good Bye</span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Contact Us -->
<div class="section light valign-wrapper">
    <div class="container">
    <form>
        <div class="row">
        <div class="col s12"><h2 class="section-title">Contact Us</h2></div>
        <div class="input-field col s6">
            <input id="first_name" type="text">
            <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
            <input id="last_name" type="text">
            <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s12">
            <textarea id="message" class="materialize-textarea"></textarea>
            <label for="message">Message</label>
            <a class="waves-effect waves-light btn-large">Button</a>
        </div>
        </div>
    </form>
    </div>
</div>

<?php 
get_footer();