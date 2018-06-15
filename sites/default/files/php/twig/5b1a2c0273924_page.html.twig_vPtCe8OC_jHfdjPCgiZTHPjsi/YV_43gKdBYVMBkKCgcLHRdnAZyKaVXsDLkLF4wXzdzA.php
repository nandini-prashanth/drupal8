<?php

/* themes/contrib/drupal8_parallax_theme/templates/layout/page.html.twig */
class __TwigTemplate_c66102c7a04451744cf2c8a54d1176ccf01c6b093990f125be9b1995e688f00f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 65, "for" => 127);
        $filters = array("raw" => 128, "t" => 361, "date" => 457);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for'),
                array('raw', 't', 'date'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

";
        // line 65
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", array()) || $this->getAttribute(($context["page"] ?? null), "top_menu", array()))) {
            // line 66
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-8\">
          ";
            // line 72
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", array())) {
                // line 73
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "contact_email", array()), "html", null, true));
                echo "
          ";
            }
            // line 75
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-4\">
          ";
            // line 80
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", array())) {
                // line 81
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_menu", array()), "html", null, true));
                echo "
          ";
            }
            // line 83
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 90
        echo "

<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-11 col-xs-10\">
          ";
        // line 99
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 100
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          ";
        }
        // line 102
        echo "        </div>
        <!-- End: Header -->

          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        </div>
      </div>
    </nav>
    <!-- Start: Main menu -->
    <div class=\"col-md-3 primar-menu-block\">
      ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 117
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
      ";
        }
        // line 119
        echo "    </div>
</header>


<!-- Start: Slider -->
  ";
        // line 124
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 125
            echo "    <div class=\"flexslider wow bounceInUp\">
      <ul class=\"slides\">
        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 128
                echo "          ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "      </ul>
    </div>
  ";
        }
        // line 133
        echo "<!-- End: Slider -->
    <div class=\"slider-buttons\">
      <a href=\"#\" class=\"reservation\">Reservation</button>
      <a href=\"#\" class=\"beer-guide\">Beer guide</button>
    </div>


<!-- Start: Home page message -->
  ";
        // line 141
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) || $this->getAttribute(($context["page"] ?? null), "homepagemessage", array())))) {
            // line 142
            echo "    <div class=\"parallax-widget zero\" id=\"about\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">

          <!-- Start: Home page message -->
          ";
            // line 147
            if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()))) {
                // line 148
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "homepagemessage", array()), "html", null, true));
                echo "
          ";
            }
            // line 150
            echo "          <!--End: Home page message -->

          ";
            // line 152
            if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array())))) {
                // line 153
                echo "            <div class=\"row topwidget\">

              <!-- Start: Top wid
              get first -->          
              ";
                // line 157
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                    // line 158
                    echo "                <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 159
                echo "          
              <!-- End: Top widget first --> 

              <!-- Start: Top widget second -->          
              ";
                // line 163
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                    // line 164
                    echo "                <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 165
                echo "          
              <!-- End: Top widget second --> 
              
              <!-- Start: Top widget third -->         
              ";
                // line 169
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                    // line 170
                    echo "                <div class = ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                    echo "</div>
              ";
                }
                // line 171
                echo "          
              <!-- End: Top widget third -->

            </div>
          ";
            }
            // line 176
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 181
        echo "<!--End: Home page message -->


<!-- Start: xxx -->
<div class=\"parallax-widget one\">
  <div class=\"parallax-region- wow bounceInDown\">
    
    ";
        // line 188
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 189
            echo "      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 192
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 197
        echo "
    ";
        // line 198
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 199
            echo "      <div id=\"page-title\">
        <div id=\"page-title-inner\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                ";
            // line 204
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 211
        echo "
    <div class=\"container\">
      <div class=\"parallax-region\">

        ";
        // line 215
        if ( !($context["is_front"] ?? null)) {
            // line 216
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">";
            // line 217
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "</div>
          </div>
        ";
        }
        // line 220
        echo "
        <div class=\"row layout\">

          ";
        // line 223
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 224
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 225
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo " </div>
            </div>
          ";
        }
        // line 228
        echo "
          ";
        // line 229
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 230
            echo "            <div class=\"content_layout\">
              <div class=";
            // line 231
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo " </div>
            </div>
          ";
        }
        // line 234
        echo "
          ";
        // line 235
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 236
            echo "            <div class=\"sidebar\">
              <div class=";
            // line 237
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo "> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo " </div>
            </div>
          ";
        }
        // line 240
        echo "
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: xxx -->


<!-- Start: Home page message -->
  ";
        // line 250
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "services", array()))) {
            // line 251
            echo "    <div class=\"parallax-widget two\" id=\"services\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 256
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "services", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 263
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
  ";
        // line 267
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "clients", array()))) {
            // line 268
            echo "    <div class=\"parallax-widget three\" id=\"clients\">
      <div class=\"container\">
        <div class=\"parallax-region wow bounceInDown\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 273
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "clients", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 280
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 284
        if ((($context["is_front"] ?? null) && ((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", array())))) {
            // line 285
            echo "  <div class=\"parallax-widget four\" id=\"products\">    
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInDown\">
        <div class=\"row\">

          <!-- Start: Bottom First -->          
          ";
            // line 291
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                // line 292
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 293
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 295
            echo "          
          <!-- End: Bottom First -->

          <!-- Start: Bottom Second -->
          ";
            // line 299
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                // line 300
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 301
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 303
            echo "          
          <!-- End: Bottom Second -->

          <!-- Start: Bottom third -->          
          ";
            // line 307
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                // line 308
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 309
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 311
            echo "          
          <!-- End: Bottom Third -->

          <!-- Start: Bottom Forth -->
          ";
            // line 315
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                // line 316
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 317
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 320
            echo "          <!-- End: Bottom Forth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 327
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 331
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 332
            echo "  <div class=\"parallax-widget five map-and-address\" id=\"contact\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <!-- Start: Google map -->
            ";
            // line 338
            if ($this->getAttribute(($context["page"] ?? null), "google_map", array())) {
                // line 339
                echo "              <div class=\"google_map\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 341
            echo "            <!-- End: Google map -->
          </div>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 348
        echo "<!--End: Home page message -->


<!-- Start: Home page message -->
";
        // line 352
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 353
            echo "  <div class=\"parallax-widget six\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 359
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 360
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_class"] ?? null), "html", null, true));
                echo ">
              <span class=\"footer-header\">";
                // line 361
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pelgrom")));
                echo "</span>
              ";
                // line 362
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer_first", array())));
                echo "
            </div>
          ";
            }
            // line 365
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 368
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 369
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              <span class=\"footer-header\">";
                // line 370
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Overig")));
                echo "</span>
              ";
                // line 371
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 374
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 377
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 378
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              <span class=\"footer-header\">";
                // line 379
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("About us")));
                echo "</span>
              ";
                // line 380
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 383
            echo "          <!-- End: Footer Third -->

          <!-- Start: Footer Fourth -->
          ";
            // line 386
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 387
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              <span class=\"footer-header\">";
                // line 388
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("OPENING HOURS")));
                echo "</span>
              ";
                // line 389
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
              <span class=\"footer-header\">";
                // line 390
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Kitchen")));
                echo "</span>
              ";
                // line 391
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 394
            echo "          <!-- End: Footer Fourth -->

          <!-- Start: Footer Sixth -->
          ";
            // line 397
            if ($this->getAttribute(($context["page"] ?? null), "footer_sixth", array())) {
                // line 398
                echo "            <div class = ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
                echo ">
              ";
                // line 399
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_sixth", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 402
            echo "          <!-- End: Footer Sixth -->

        </div>
      </div>
    </div>
  </div>
";
        }
        // line 409
        echo "<!--End: Home page message -->


<!-- Start: Footer Menu -->
";
        // line 413
        if (($context["show_social_icon"] ?? null)) {
            // line 414
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Social media links -->
        <div class=\"col-sm-12\">
          <div class=\"social-media\">
            ";
            // line 421
            if (($context["facebook_url"] ?? null)) {
                // line 422
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 424
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 425
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 427
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 428
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 430
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 431
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 433
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 434
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 436
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 437
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 439
            echo "          </div>
        </div>
        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 447
        echo "<!-- End: Footer Menu -->


<!-- Start: Copyright -->
<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 457
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true));
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 462
        if (($context["show_credit_link"] ?? null)) {
            // line 463
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
        }
        // line 467
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/drupal8_parallax_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 467,  794 => 463,  792 => 462,  784 => 457,  772 => 447,  762 => 439,  756 => 437,  753 => 436,  747 => 434,  744 => 433,  738 => 431,  735 => 430,  729 => 428,  726 => 427,  720 => 425,  717 => 424,  711 => 422,  709 => 421,  700 => 414,  698 => 413,  692 => 409,  683 => 402,  677 => 399,  672 => 398,  670 => 397,  665 => 394,  659 => 391,  655 => 390,  651 => 389,  647 => 388,  642 => 387,  640 => 386,  635 => 383,  629 => 380,  625 => 379,  620 => 378,  618 => 377,  613 => 374,  607 => 371,  603 => 370,  598 => 369,  596 => 368,  591 => 365,  585 => 362,  581 => 361,  576 => 360,  574 => 359,  566 => 353,  564 => 352,  558 => 348,  549 => 341,  543 => 339,  541 => 338,  533 => 332,  531 => 331,  525 => 327,  516 => 320,  510 => 317,  505 => 316,  503 => 315,  497 => 311,  491 => 309,  486 => 308,  484 => 307,  478 => 303,  472 => 301,  467 => 300,  465 => 299,  459 => 295,  453 => 293,  448 => 292,  446 => 291,  438 => 285,  436 => 284,  430 => 280,  420 => 273,  413 => 268,  411 => 267,  405 => 263,  395 => 256,  388 => 251,  386 => 250,  374 => 240,  366 => 237,  363 => 236,  361 => 235,  358 => 234,  350 => 231,  347 => 230,  345 => 229,  342 => 228,  334 => 225,  331 => 224,  329 => 223,  324 => 220,  318 => 217,  315 => 216,  313 => 215,  307 => 211,  297 => 204,  290 => 199,  288 => 198,  285 => 197,  277 => 192,  272 => 189,  270 => 188,  261 => 181,  254 => 176,  247 => 171,  239 => 170,  237 => 169,  231 => 165,  223 => 164,  221 => 163,  215 => 159,  207 => 158,  205 => 157,  199 => 153,  197 => 152,  193 => 150,  187 => 148,  185 => 147,  178 => 142,  176 => 141,  166 => 133,  161 => 130,  152 => 128,  148 => 127,  144 => 125,  142 => 124,  135 => 119,  129 => 117,  127 => 116,  111 => 102,  105 => 100,  103 => 99,  92 => 90,  83 => 83,  77 => 81,  75 => 80,  68 => 75,  62 => 73,  60 => 72,  52 => 66,  50 => 65,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/drupal8_parallax_theme/templates/layout/page.html.twig", "/var/www/html/drupal8/themes/contrib/drupal8_parallax_theme/templates/layout/page.html.twig");
    }
}
