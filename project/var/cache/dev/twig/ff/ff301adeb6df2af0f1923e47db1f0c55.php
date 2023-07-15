<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/results.html.twig */
class __TwigTemplate_b675c4935c86727a48a2e59da6e481b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Details by company!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h4>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["companie"]) || array_key_exists("companie", $context) ? $context["companie"] : (function () { throw new RuntimeError('Variable "companie" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</h4>
            <hr>
                <table id=\"example\" class=\"display\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Ca</th>
                            <th scope=\"col\">Margin</th>
                            <th scope=\"col\">Ebitda</th>
                            <th scope=\"col\">loss</th>
                            <th scope=\"col\">Year</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 23
            echo "                        <tr>
                            <th scope=\"row\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "ca", [], "any", false, false, false, 24), "html", null, true);
            echo "</th>
                            <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "margin", [], "any", false, false, false, 25), "html", null, true);
            echo "</th>
                            <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "ebitda", [], "any", false, false, false, 26), "html", null, true);
            echo "</th>
                            <th scope=\"row\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "loss", [], "any", false, false, false, 27), "html", null, true);
            echo "</th>
                            <th scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "year", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                    </tbody>
                </table>

            <br>
            <h4>Comparison of the two years</h4>
            <hr>
            <button type=\"button\" class=\"btn btn-primary btn-sm disabled\">Ebitda</button>
            <button type=\"button\" class=\"btn btn-success btn-sm disabled\">Margin</button>
            <button type=\"button\" class=\"btn btn-danger btn-sm disabled\">Ca</button>
            <button type=\"button\" class=\"btn btn-dark btn-sm disabled\">Loss</button>

            <canvas id=\"myChart\" style=\"width:100%;max-width:600px\"></canvas>
            <br>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    <script>
        var dataGraphCa = JSON.parse('";
        // line 50
        echo json_encode((isset($context["dataGraphCa"]) || array_key_exists("dataGraphCa", $context) ? $context["dataGraphCa"] : (function () { throw new RuntimeError('Variable "dataGraphCa" does not exist.', 50, $this->source); })()));
        echo "');
        var dataGraphMargin = JSON.parse('";
        // line 51
        echo json_encode((isset($context["dataGraphMargin"]) || array_key_exists("dataGraphMargin", $context) ? $context["dataGraphMargin"] : (function () { throw new RuntimeError('Variable "dataGraphMargin" does not exist.', 51, $this->source); })()));
        echo "');
        var dataGraphEbitda = JSON.parse('";
        // line 52
        echo json_encode((isset($context["dataGraphEbitda"]) || array_key_exists("dataGraphEbitda", $context) ? $context["dataGraphEbitda"] : (function () { throw new RuntimeError('Variable "dataGraphEbitda" does not exist.', 52, $this->source); })()));
        echo "');
        var dataGraphLoss = JSON.parse('";
        // line 53
        echo json_encode((isset($context["dataGraphLoss"]) || array_key_exists("dataGraphLoss", $context) ? $context["dataGraphLoss"] : (function () { throw new RuntimeError('Variable "dataGraphLoss" does not exist.', 53, $this->source); })()));
        echo "');

        const xValues = [2016,2017];

        new Chart(\"myChart\", {
        type: \"line\",
        data: {
            labels: xValues,
            datasets: [{
            data: dataGraphCa,
            borderColor: \"red\",
            fill: false
            },{
            data: dataGraphMargin,
            borderColor: \"green\",
            fill: false
            },{
            data: dataGraphEbitda,
            borderColor: \"blue\",
            fill: false
            },{
            data: dataGraphLoss,
            borderColor: \"black\",
            fill: false
            }]
        },
        options: {
            legend: {display: false}
        }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 53,  188 => 52,  184 => 51,  180 => 50,  177 => 49,  167 => 48,  142 => 31,  133 => 28,  129 => 27,  125 => 26,  121 => 25,  117 => 24,  114 => 23,  110 => 22,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Details by company!{% endblock %}

{% block body %}
 <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-12\">
            <h4>{{ companie.name }}</h4>
            <hr>
                <table id=\"example\" class=\"display\" style=\"width:100%\">
                    <thead>
                        <tr>
                            <th scope=\"col\">Ca</th>
                            <th scope=\"col\">Margin</th>
                            <th scope=\"col\">Ebitda</th>
                            <th scope=\"col\">loss</th>
                            <th scope=\"col\">Year</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for result in results %}
                        <tr>
                            <th scope=\"row\">{{ result.ca }}</th>
                            <th scope=\"row\">{{ result.margin }}</th>
                            <th scope=\"row\">{{ result.ebitda }}</th>
                            <th scope=\"row\">{{ result.loss }}</th>
                            <th scope=\"row\">{{ result.year }}</th>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>

            <br>
            <h4>Comparison of the two years</h4>
            <hr>
            <button type=\"button\" class=\"btn btn-primary btn-sm disabled\">Ebitda</button>
            <button type=\"button\" class=\"btn btn-success btn-sm disabled\">Margin</button>
            <button type=\"button\" class=\"btn btn-danger btn-sm disabled\">Ca</button>
            <button type=\"button\" class=\"btn btn-dark btn-sm disabled\">Loss</button>

            <canvas id=\"myChart\" style=\"width:100%;max-width:600px\"></canvas>
            <br>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    <script>
        var dataGraphCa = JSON.parse('{{ dataGraphCa | json_encode | raw }}');
        var dataGraphMargin = JSON.parse('{{ dataGraphMargin | json_encode | raw }}');
        var dataGraphEbitda = JSON.parse('{{ dataGraphEbitda | json_encode | raw }}');
        var dataGraphLoss = JSON.parse('{{ dataGraphLoss | json_encode | raw }}');

        const xValues = [2016,2017];

        new Chart(\"myChart\", {
        type: \"line\",
        data: {
            labels: xValues,
            datasets: [{
            data: dataGraphCa,
            borderColor: \"red\",
            fill: false
            },{
            data: dataGraphMargin,
            borderColor: \"green\",
            fill: false
            },{
            data: dataGraphEbitda,
            borderColor: \"blue\",
            fill: false
            },{
            data: dataGraphLoss,
            borderColor: \"black\",
            fill: false
            }]
        },
        options: {
            legend: {display: false}
        }
        });
    </script>
{% endblock %}
", "dashboard/results.html.twig", "/var/www/project/templates/dashboard/results.html.twig");
    }
}
