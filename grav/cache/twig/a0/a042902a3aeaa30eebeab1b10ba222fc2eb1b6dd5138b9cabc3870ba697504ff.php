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

/* partials/search.html.twig */
class __TwigTemplate_b38fd1f9bb7d05e394906d69990b767824c2e526f31ee57fa3d2acb10a1fe077 extends \Twig\Template
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
        echo "<div class=\"searchbox\">
    <label for=\"search-by\"><i class=\"fa fa-search\"></i></label>
    <input id=\"search-by\" type=\"text\" placeholder=\"";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_SEARCH_DOCUMENTATION");
        echo "\"
           data-search-input=\"";
        // line 4
        echo ($context["base_url_relative"] ?? null);
        echo "/search.json/query\"/>
    <span data-search-clear><i class=\"fa fa-close\"></i></span>
</div>
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tntsearch", []), "enabled", [])) {
            // line 8
            echo "  <div class=\"adv-search\">
    <i class=\"fa fa-sliders\"></i> <a href=\"";
            // line 9
            echo ($context["base_url_absolute"] ?? null);
            echo "/tntsearch\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_LEARN2_ADVANCED_SEARCH");
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 8,  44 => 7,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/search.html.twig", "/home/tanertemel/web/t4.bolton365.net/public_html/user/themes/learn2-git-sync/templates/partials/search.html.twig");
    }
}
