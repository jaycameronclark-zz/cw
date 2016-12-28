<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_a4f36db1f09555ee4ed2e86ca992dd3c850a42cbaac4077181edd34ce61ff07f extends Twig_Template
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
        // line 1
        echo "<section class=\"portfolio text-center section-padding\" id=\"portfolio\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
      <div id=\"portfolioSlider\">
        <ul class=\"slides\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "          <li>
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <div class=\"col-md-4 wp4 ";
                if ($this->getAttribute($context["item"], "delay", array())) {
                    echo "delay-";
                    echo $this->getAttribute($context["item"], "delay", array());
                    echo "s";
                }
                echo "\">
              <div class=\"overlay-effect effects clearfix\">
                <div class=\"img\">
                  <img src=\"";
                // line 13
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "url", array());
                echo "\" alt=\"Portfolio Item\">
                  <div class=\"overlay\">
                    <a href=\"";
                // line 15
                echo $this->getAttribute($context["item"], "img_url", array());
                echo "\" class=\"expand\"><i class=\"fa fa-search\"></i><br>";
                echo $this->getAttribute($context["item"], "img_text", array());
                echo "</a>
                    <a class=\"close-overlay hidden\">x</a>
                  </div>
                </div>
              </div>
              <h2>";
                // line 20
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h2>
              <p>";
                // line 21
                echo $this->getAttribute($context["item"], "content", array());
                echo "</p>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </ul>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  80 => 24,  71 => 21,  67 => 20,  57 => 15,  52 => 13,  41 => 10,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"portfolio text-center section-padding\" id=\"portfolio\">
  <div class=\"container\">
    <div class=\"row\">
      {{ page.content }}
      <div id=\"portfolioSlider\">
        <ul class=\"slides\">
          {% for row in page.header.portfolio|batch(3) %}
          <li>
            {% for item in row %}
            <div class=\"col-md-4 wp4 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
              <div class=\"overlay-effect effects clearfix\">
                <div class=\"img\">
                  <img src=\"{{ page.media[item.img].url }}\" alt=\"Portfolio Item\">
                  <div class=\"overlay\">
                    <a href=\"{{ item.img_url }}\" class=\"expand\"><i class=\"fa fa-search\"></i><br>{{ item.img_text }}</a>
                    <a class=\"close-overlay hidden\">x</a>
                  </div>
                </div>
              </div>
              <h2>{{ item.title }}</h2>
              <p>{{ item.content }}</p>
            </div>
            {% endfor %}
          </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
</section>
", "modular/portfolio.html.twig", "/home/grav/www/html/user/themes/halcyon/templates/modular/portfolio.html.twig");
    }
}
