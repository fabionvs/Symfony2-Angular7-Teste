<?php

/* AppBundle:Endereco:index.html.twig */
class __TwigTemplate_ceed923804e4e281b6b3a5611e27e71d2ba175a34a2a8e2782c03888798a8006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::Layout.html.twig", "AppBundle:Endereco:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Endereco:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Endereco:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <table class=\"table\">
            <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Quadra</th>
                <th scope=\"col\">Numero</th>
                <th scope=\"col\">Opcṍes</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enderecos"] ?? $this->getContext($context, "enderecos")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 16
            echo "                <tr>
                    <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "quadra", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "numero", array()), "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contatos_show", array("id" => $this->getAttribute($this->getAttribute($context["e"], "contato", array()), "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Contato</button></a>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("endereco_show", array("id" => $this->getAttribute($this->getAttribute($context["e"], "contato", array()), "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-success\">Ver Endereço</button></a>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("endereco_delete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-danger\">Excluir</button></a>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("endereco_delete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-sm btn-warning\">Editar</button></a>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </tbody>
        </table>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Endereco:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  95 => 25,  91 => 24,  87 => 23,  83 => 22,  77 => 19,  73 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::Layout.html.twig' %}

{% block body %}
    <div class=\"container\">
        <table class=\"table\">
            <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">Id</th>
                <th scope=\"col\">Quadra</th>
                <th scope=\"col\">Numero</th>
                <th scope=\"col\">Opcṍes</th>
            </tr>
            </thead>
            <tbody>
            {% for e in enderecos %}
                <tr>
                    <th scope=\"row\">{{ e.id }}</th>
                    <td>{{ e.quadra }}</td>
                    <td>{{ e.numero }}</td>
                    <td>
                        <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
                            <a href=\"{{ path('contatos_show', {'id' : e.contato.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-primary\">Ver Contato</button></a>
                            <a href=\"{{ path('endereco_show', {'id' : e.contato.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-success\">Ver Endereço</button></a>
                            <a href=\"{{ path('endereco_delete', {'id' : e.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-danger\">Excluir</button></a>
                            <a href=\"{{ path('endereco_delete', {'id' : e.id}) }}\"><button type=\"button\" class=\"btn btn-sm btn-warning\">Editar</button></a>
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
{% endblock %}
", "AppBundle:Endereco:index.html.twig", "/var/www/html/teste4/src/AppBundle/Resources/views/Endereco/index.html.twig");
    }
}
