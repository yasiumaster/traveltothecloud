<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dd6e18d4be1d96d3aa69304ee80cafe6683b9dfc929a437558f6564d856fd7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c17aad87e82a3388763385bfa504a9bb8cbd8a06b7fd2cf791819e94b9899e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17aad87e82a3388763385bfa504a9bb8cbd8a06b7fd2cf791819e94b9899e73->enter($__internal_c17aad87e82a3388763385bfa504a9bb8cbd8a06b7fd2cf791819e94b9899e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c17aad87e82a3388763385bfa504a9bb8cbd8a06b7fd2cf791819e94b9899e73->leave($__internal_c17aad87e82a3388763385bfa504a9bb8cbd8a06b7fd2cf791819e94b9899e73_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_290bee6542a8e2fc972cf644233a89831aff1ac512d1564a007a7aeac2e3da0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290bee6542a8e2fc972cf644233a89831aff1ac512d1564a007a7aeac2e3da0a->enter($__internal_290bee6542a8e2fc972cf644233a89831aff1ac512d1564a007a7aeac2e3da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_290bee6542a8e2fc972cf644233a89831aff1ac512d1564a007a7aeac2e3da0a->leave($__internal_290bee6542a8e2fc972cf644233a89831aff1ac512d1564a007a7aeac2e3da0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_723bd98ef813c4579b91465f70eaf04e5657470766f40df511ca8ad3f641cf1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723bd98ef813c4579b91465f70eaf04e5657470766f40df511ca8ad3f641cf1d->enter($__internal_723bd98ef813c4579b91465f70eaf04e5657470766f40df511ca8ad3f641cf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_723bd98ef813c4579b91465f70eaf04e5657470766f40df511ca8ad3f641cf1d->leave($__internal_723bd98ef813c4579b91465f70eaf04e5657470766f40df511ca8ad3f641cf1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_09f0d845c8efaaca6b3c3fd136ed6b65153ffbe774862e65211496450e813370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f0d845c8efaaca6b3c3fd136ed6b65153ffbe774862e65211496450e813370->enter($__internal_09f0d845c8efaaca6b3c3fd136ed6b65153ffbe774862e65211496450e813370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_09f0d845c8efaaca6b3c3fd136ed6b65153ffbe774862e65211496450e813370->leave($__internal_09f0d845c8efaaca6b3c3fd136ed6b65153ffbe774862e65211496450e813370_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\traveltothecloud\\web\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
