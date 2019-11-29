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

/* partials/codepen.html.twig */
class __TwigTemplate_2146916f16847b6bc72e2f5e93b9a281371fd539d9f1ea09cbbb52dae69348c5 extends \Twig\Template
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
        echo "<div class=\"codepen-wrapper\">
  <p data-height=\"";
        // line 2
        echo ($context["height"] ?? null);
        echo "\" data-theme-id=\"0\" data-slug-hash=\"";
        echo ($context["id"] ?? null);
        echo "\" data-default-tab=\"";
        echo ($context["defaultTab"] ?? null);
        echo "\" data-user=\"";
        echo ($context["user"] ?? null);
        echo "\" data-embed-version=\"2\" data-pen-title=\"";
        echo ($context["title"] ?? null);
        echo "\" data-preview=\"";
        echo ($context["preview"] ?? null);
        echo "\" class=\"codepen\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, ($context["content"] ?? null));
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/codepen.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/codepen.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/codepen-embed/templates/partials/codepen.html.twig");
    }
}
