<?php

/* modular/team.html.twig */
class __TwigTemplate_de30e198354deb6422c15e67efffb97c2c56b3fa0a393148a2e77ba74a7db45b extends Twig_Template
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
        echo "<section class=\"team text-center section-padding\" id=\"team\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
      </div>
    </div>
    <div class=\"row\">
      <div class=\"team-wrapper\">
        <div id=\"teamSlider\">
          <ul class=\"slides\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "team", array()), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "            <li>
              ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "              <div class=\"col-md-4 wp5 ";
                if ($this->getAttribute($context["item"], "delay", array())) {
                    echo "delay-";
                    echo $this->getAttribute($context["item"], "delay", array());
                    echo "s";
                }
                echo "\">
                <img src=\"";
                // line 16
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "img", array()), array(), "array"), "url", array());
                echo "\" alt=\"Team\">
                <h2>";
                // line 17
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h2>
                <p>";
                // line 18
                echo $this->getAttribute($context["item"], "content", array());
                echo "</p>

                <div class=\"social\">
                  <ul class=\"social-buttons\">
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "social", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                    // line 23
                    echo "                    <li><a href=\"";
                    echo $this->getAttribute($context["icon"], "url", array());
                    echo "\" class=\"social-btn\"><i class=\"fa fa-";
                    echo $this->getAttribute($context["icon"], "icon", array());
                    echo "\"></i></a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                  </ul>
                </div>

              </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  95 => 30,  85 => 25,  74 => 23,  70 => 22,  63 => 18,  59 => 17,  55 => 16,  46 => 15,  42 => 14,  39 => 13,  35 => 12,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"team text-center section-padding\" id=\"team\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ page.content }}
      </div>
    </div>
    <div class=\"row\">
      <div class=\"team-wrapper\">
        <div id=\"teamSlider\">
          <ul class=\"slides\">
            {% for row in page.header.team|batch(3) %}
            <li>
              {% for item in row %}
              <div class=\"col-md-4 wp5 {% if item.delay %}delay-{{ item.delay }}s{% endif %}\">
                <img src=\"{{ page.media[item.img].url }}\" alt=\"Team\">
                <h2>{{ item.title }}</h2>
                <p>{{ item.content }}</p>

                <div class=\"social\">
                  <ul class=\"social-buttons\">
                    {% for icon in item.social  %}
                    <li><a href=\"{{ icon.url }}\" class=\"social-btn\"><i class=\"fa fa-{{ icon.icon }}\"></i></a></li>
                    {% endfor %}
                  </ul>
                </div>

              </div>
              {% endfor %}
            </li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
", "modular/team.html.twig", "/home/grav/www/html/user/themes/halcyon/templates/modular/team.html.twig");
    }
}
