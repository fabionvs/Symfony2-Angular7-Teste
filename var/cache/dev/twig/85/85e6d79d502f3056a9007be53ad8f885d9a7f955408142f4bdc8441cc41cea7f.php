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
        <h1>Lista de Endereços</h1>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "            <div class=\"col-md-12\">
                <div class=\"alert alert-success\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        <table class=\"table\">
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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enderecos"] ?? $this->getContext($context, "enderecos")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 24
            echo "                <tr>
                    <th scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "</th>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "quadra", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "numero", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contatos_show", array("id" => $this->getAttribute($this->getAttribute($context["e"], "contato", array()), "id", array()))), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-primary\">Ver Contato</button>
                        </a>
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("endereco_delete", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-danger\">Excluir</button>
                        </a>
                        <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("endereco_edit", array("id" => $this->getAttribute($context["e"], "id", array()))), "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-warning\">Editar</button>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
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
        return array (  127 => 41,  115 => 35,  109 => 32,  103 => 29,  98 => 27,  94 => 26,  90 => 25,  87 => 24,  83 => 23,  71 => 13,  61 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
        <h1>Lista de Endereços</h1>
        {% for message in app.flashes('success') %}
            <div class=\"col-md-12\">
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            </div>
        {% endfor %}
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
                        <a href=\"{{ path('contatos_show', {'id' : e.contato.id}) }}\">
                            <button type=\"button\" class=\"btn btn-primary\">Ver Contato</button>
                        </a>
                        <a href=\"{{ path('endereco_delete', {'id' : e.id}) }}\">
                            <button type=\"button\" class=\"btn btn-danger\">Excluir</button>
                        </a>
                        <a href=\"{{ path('endereco_edit', {'id' : e.id}) }}\">
                            <button type=\"button\" class=\"btn btn-warning\">Editar</button>
                        </a>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

    </div>
{% endblock %}
", "AppBundle:Endereco:index.html.twig", "/var/www/html/Symfony2-Angular7-Teste/src/AppBundle/Resources/views/Endereco/index.html.twig");
    }
}
