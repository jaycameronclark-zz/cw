<?php

/* modular/ignite.html.twig */
class __TwigTemplate_4ef6c148386d057f9237da9367864bff941cdc35b7ca53d913d6b7c067bf318f extends Twig_Template
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
        echo "<div class=\"ignite-cta text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/ignite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ignite-cta text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        {{ page.content }}
      </div>
    </div>
  </div>
</div>
", "modular/ignite.html.twig", "/home/grav/www/html/user/themes/halcyon/templates/modular/ignite.html.twig");
    }
}
