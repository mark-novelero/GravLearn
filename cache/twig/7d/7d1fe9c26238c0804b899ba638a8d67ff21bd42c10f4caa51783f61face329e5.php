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

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_f68a5ff5d8887cb54bde00efea68e3c56a8ffa5beb185824ff0a99e9d829cbf2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/codemirror/codemirror.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("forms/fields/codemirror/codemirror.html.twig", "forms/fields/markdown/markdown.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/fields/codemirror/codemirror.html.twig\" %}
", "forms/fields/markdown/markdown.html.twig", "/Users/marknovelero/Desktop/Grav-Projects/pre-learn/user/plugins/admin/themes/grav/templates/forms/fields/markdown/markdown.html.twig");
    }
}
