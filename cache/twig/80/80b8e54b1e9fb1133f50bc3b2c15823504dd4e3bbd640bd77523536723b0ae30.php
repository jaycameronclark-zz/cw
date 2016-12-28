<?php

/* modular/swag.html.twig */
class __TwigTemplate_e656b2a9fae1d9126b37fdd9ff30808b3d5b6b3330d56208a43001bd8199a9c7 extends Twig_Template
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
        echo "<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        ";
        // line 5
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        <a href=\"#portfolio\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/swag.html.twig";
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
        return new Twig_Source("<section class=\"swag text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        {{ page.content }}
        <a href=\"#portfolio\" class=\"down-arrow-btn\"><i class=\"fa fa-chevron-down\"></i></a>
      </div>
    </div>
  </div>
</section>
", "modular/swag.html.twig", "/home/grav/www/html/user/themes/halcyon/templates/modular/swag.html.twig");
    }
}
