<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/logo.html.twig */
class __TwigTemplate_ffa8a0d87a8866e06f5188b9b27e7ee4a7c27d0463ec6b7873c7baaa41d70f8f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ( !$this->getAttribute(($context["theme_config"] ?? null), "hide_site_title", [])) {
            // line 2
            echo "  <p><div style=\"margin-bottom: -4rem;\">&nbsp;</div></p>
  <h5>";
            // line 3
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
            echo "</h5>
  <p><div style=\"margin-top: -4rem;\">&nbsp;</div></p>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/logo.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/themes/learn2-git-sync/templates/partials/logo.html.twig");
    }
}
