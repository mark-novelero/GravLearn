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

/* partials/list-sort.html.twig */
class __TwigTemplate_cebc40f35c7a9146e140087f9e9523bda2ca907d94f68418004d7f07e29e6457 extends \Twig\Template
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
        echo "<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.NAME"), "html", null, true);
        echo "</option>
        <option value=\"author\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
        echo "</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"release-date\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.RELEASE_DATE"), "html", null, true);
        echo "</option>
        ";
        // line 7
        if (((($context["list_view"] ?? null) == "plugins") &&  !($context["installing"] ?? null))) {
            echo "<option value=\"enabled\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ENABLED"), "html", null, true);
            echo "</option>";
        }
        // line 8
        echo "        ";
        if ( !($context["installing"] ?? null)) {
            echo "<option value=\"updatable\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.UPDATES_AVAILABLE"), "html", null, true);
            echo "</option>";
        }
        // line 9
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "gpm", []), "releases", []) == "testing")) {
            echo "<option value=\"testing\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.TESTING"), "html", null, true);
            echo "</option>";
        }
        // line 10
        echo "    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
";
    }

    public function getTemplateName()
    {
        return "partials/list-sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  60 => 9,  53 => 8,  47 => 7,  43 => 6,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>{{ \"PLUGIN_ADMIN.NAME\"|t }}</option>
        <option value=\"author\">{{ \"PLUGIN_ADMIN.AUTHOR\"|t }}</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"release-date\">{{ \"PLUGIN_ADMIN.RELEASE_DATE\"|t }}</option>
        {% if list_view == 'plugins' and not installing %}<option value=\"enabled\">{{ \"PLUGIN_ADMIN.ENABLED\"|t }}</option>{% endif %}
        {% if not installing %}<option value=\"updatable\">{{ \"PLUGIN_ADMIN.UPDATES_AVAILABLE\"|t }}</option>{% endif %}
        {% if config.system.gpm.releases == 'testing' %}<option value=\"testing\">{{ \"PLUGIN_ADMIN.TESTING\"|t }}</option>{% endif %}
    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
", "partials/list-sort.html.twig", "/Users/marknovelero/Desktop/Grav-Projects/pre-learn/user/plugins/admin/themes/grav/templates/partials/list-sort.html.twig");
    }
}
