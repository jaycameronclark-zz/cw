<?php

/* partials/footer.html.twig */
class __TwigTemplate_3bf91d38976c9aebd6f833ec4a1488c08364142a0f3b925745c6ab22aee407f7 extends Twig_Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "links", array())) {
            // line 5
            echo "    <div class=\"col-md-6\">
      <ul class=\"legals\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "links", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      </ul>
    </div>
    ";
        }
        // line 13
        echo "    <div class=\"col-md-6 credit\">
      <p>Powered by <a href=\"https://getgrav.org/\">Grav</a> &amp; <a href=\"https://www.digitalocean.com/\">DigitalOcean</a></p>
    </div>
  </div>
</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 10,  34 => 8,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer>
  <div class=\"container\">
    <div class=\"row\">
    {% if site.footer.links %}
    <div class=\"col-md-6\">
      <ul class=\"legals\">
        {% for item in site.footer.links %}
        <li><a href=\"{{ item.url }}\">{{ item.text }}</a></li>
        {% endfor %}
      </ul>
    </div>
    {% endif %}
    <div class=\"col-md-6 credit\">
      <p>Powered by <a href=\"https://getgrav.org/\">Grav</a> &amp; <a href=\"https://www.digitalocean.com/\">DigitalOcean</a></p>
    </div>
  </div>
</div>
</footer>
", "partials/footer.html.twig", "/home/grav/www/html/user/themes/halcyon/templates/partials/footer.html.twig");
    }
}
