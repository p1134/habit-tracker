<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* habit/index.html.twig */
class __TwigTemplate_0c6f478ad7c74d24665843006914873c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habit/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Habitify - Nawyki";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div class=\"habits__container w-full h-screen flex flex-col\">

    <div class=\"flex flex w-full h-full\">
        ";
        // line 11
        yield "        <div class=\"nav__container h-full mt-5 flex justify-center\">
            <div class=\"nav__container h-full flex flex-col items-center\">
                <div class=\"nav__name mb-16\">
                    <p class=\"text-4xl font-bold\">HABITIF<span class=\"main-color\">Y.</span></p>
                </div>

                <div class=\"nav__tabs flex flex-col gap-5\">

                        <a class=\"w-auto h-auto\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                            <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                    <img class=\"w-5 h-5\" src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/dashboard.svg"), "html", null, true);
        yield "\" alt=\"\">
                                    <p>Dashboard</p>
                                </div>
                            <div class=\"btn__nav-dot absolute bottom-1 left-0\"></div>
                            </div>
                        </a>

                    <div class=\"nav__habits btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit");
        yield "\" class=\"flex gap-3\">
                        <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nawyki-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                        <p>Nawyki</p>
                    </a>
                    </div>
                    <div class=\"nav__summary btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"\" class=\"flex gap-3\">
                        <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/podsumowanie-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                        <p>Podsumowanie</p>
                    </a>
                    </div>
                    <div class=\"nav__society btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"\" class=\"flex gap-3\">
                        <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spolecznosc-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                        <p>Społeczność</p>
                    </a>
                    </div>
                    <div class=\"nav__option btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"\" class=\"flex gap-3\">
                        <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ustawienia-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                        <p>Ustawienia</p>
                    </a>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"main-container w-full h-full flex flex-col\">
            ";
        // line 60
        yield "            <div class=\"nav flex w-full justify-between h-20 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-medium\">
                Dashboard
                </div>

                <div class=\"profile flex justify-center items-center gap-4\">
                    <div class=\"profile-text\">
                        <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <p>";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 68, $this->source); })()), "firstname", [], "any", false, false, false, 68), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 68, $this->source); })()), "lastname", [], "any", false, false, false, 68), "html", null, true);
        yield " </p>
                        </a>
                    </div>

                    <div class=\"profile-icon w-30 h-30\">
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
        yield "\">
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 81
        yield "            <div class=\"habits__main h-full w-full main__background flex gap-4 flex-col\">
                ";
        // line 83
        yield "                <div class=\"habits__panel--top w-full h-28 flex justify-between mt-6 items-center\">
                    <div class=\"ml-8\">
                        <p class=\"text-3xl font-semibold mb-3\">Dzisiaj</p>
                        <p class=\"text-lg\">";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 86, $this->source); })()), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 86, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"mr-8 bg-white w-72 h-20 rounded-3xl flex items-center justify-between\">
                        <p class=\"ml-4 text-xl\">Najdłuższa seria</p>
                        <div class=\"main__background--gold w-12 h-12 rounded-xl mr-4 flex justify-center items-center\">
                        
                        </div>
                    </div>
                </div>
                
                <div class=\"habits__panel-main w-full h-full flex flex-row gap-8\">

                    <div class=\"habits__panel--left mt-4 mb-8 ml-8 flex flex-col gap-6\">
                        <div class=\"overflow-hidden m-8 flex flex-col gap-4\">
                        <p class=\"text-2xl\">Nawyki</p>
                            <div class=\"habits__panel__habit overflow-y-scroll overflow-x-hidden\">
                                <form method=\"post\" action=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tracking_habit");
        yield "\">
                                    ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habits"]) || array_key_exists("habits", $context) ? $context["habits"] : (function () { throw new RuntimeError('Variable "habits" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 104
            yield "                                        <div class=\"border rounded-xl mb-5 w-full\">
                                            <label class=\"habits__row flex p-4 items-center gap-4 cursor-pointer justify-between\">
                                                <div class=\"habits__row flex items-center gap-4\">
                                                    ";
            // line 107
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 107), "category", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107) == 1)) {
                // line 108
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-blue-100\">
                                                            <img src=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-blue.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 113
$context["h"], "habit", [], "any", false, false, false, 113), "category", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113) == 2)) {
                // line 114
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-green-100\">
                                                            <img src=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-green.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 119
$context["h"], "habit", [], "any", false, false, false, 119), "category", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119) == 3)) {
                // line 120
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-orange-100\">
                                                            <img src=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-yellow.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            }
            // line 126
            yield "                                                
                                                    ";
            // line 127
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["h"], "isDeleted", [], "any", false, false, false, 127)) {
                // line 128
                yield "                                                        ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, true, false, 128), "name", [], "any", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 128), "name", [], "any", false, false, false, 128), "html", null, true)));
                yield "
                                                </div>
                                                
                                                <div class=\"flex items-center \">
                                                    <div class=\"habits__habit-row w-48 flex items-center\">
                                                    <input type=\"checkbox\" name=\"habits[]\" value=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 133), "html", null, true);
                yield "\" class=\"habits__checkbox cursor-pointer invisible\"
                                                    ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracked"]) || array_key_exists("tracked", $context) ? $context["tracked"] : (function () { throw new RuntimeError('Variable "tracked" does not exist.', 134, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 135
                    yield "                                                        ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 135) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135) == CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 135))) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 135), "isDeleted", [], "any", false, false, false, 135)) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["t"], "isDeleted", [], "any", false, false, false, 135))) {
                        // line 136
                        yield "                                                            checked
                                                        ";
                    }
                    // line 138
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                yield "                                                    onchange=\"this.form.submit()\" >
                                            ";
            }
            // line 141
            yield "

                                                    <div class=\"habits__checkbox-progress h-2 rounded-md main__background--gold\"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['h'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                                    ";
        // line 150
        yield "                                </form>
                            </div>
                            <div class=\"habits__select-btn w-full flex justify-end\">
                                <div class=\"overflow-hidden relative w-auto h-auto\">
                                    <a class=\"btn w-24 relative\" href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_habit");
        yield "\"><button class=\"bg-black text-white text-4xl w-24 rounded-xl mt-1\">+</button></a>
                                    <div class=\"btn-dot absolute bottom-1 left-0\"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    ";
        // line 165
        yield "
                    ";
        // line 167
        yield "                    <div class=\"habits__panel--right mb-8 mr-8 mt-4\">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "habit/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  366 => 167,  363 => 165,  352 => 154,  346 => 150,  344 => 149,  331 => 141,  327 => 139,  321 => 138,  317 => 136,  314 => 135,  310 => 134,  306 => 133,  297 => 128,  295 => 127,  292 => 126,  285 => 122,  281 => 120,  279 => 119,  273 => 116,  269 => 114,  267 => 113,  261 => 110,  257 => 108,  255 => 107,  250 => 104,  246 => 103,  242 => 102,  221 => 86,  216 => 83,  213 => 81,  204 => 74,  200 => 73,  190 => 68,  186 => 67,  177 => 60,  164 => 49,  155 => 43,  146 => 37,  137 => 31,  133 => 30,  122 => 22,  116 => 19,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Habitify - Nawyki{% endblock %}

{% block body %}

<div class=\"habits__container w-full h-screen flex flex-col\">

    <div class=\"flex flex w-full h-full\">
        {# Nawigacja #}
        <div class=\"nav__container h-full mt-5 flex justify-center\">
            <div class=\"nav__container h-full flex flex-col items-center\">
                <div class=\"nav__name mb-16\">
                    <p class=\"text-4xl font-bold\">HABITIF<span class=\"main-color\">Y.</span></p>
                </div>

                <div class=\"nav__tabs flex flex-col gap-5\">

                        <a class=\"w-auto h-auto\" href=\"{{ path('app_dashboard') }}\">
                            <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                    <img class=\"w-5 h-5\" src=\"{{ asset('/img/dashboard.svg') }}\" alt=\"\">
                                    <p>Dashboard</p>
                                </div>
                            <div class=\"btn__nav-dot absolute bottom-1 left-0\"></div>
                            </div>
                        </a>

                    <div class=\"nav__habits btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"{{ path('app_habit') }}\" class=\"flex gap-3\">
                        <img src=\"{{ asset('img/nawyki-off.svg') }}\" alt=\"\">
                        <p>Nawyki</p>
                    </a>
                    </div>
                    <div class=\"nav__summary btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"\" class=\"flex gap-3\">
                        <img src=\"{{ asset('img/podsumowanie-off.svg') }}\" alt=\"\">
                        <p>Podsumowanie</p>
                    </a>
                    </div>
                    <div class=\"nav__society btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"\" class=\"flex gap-3\">
                        <img src=\"{{ asset('img/spolecznosc-off.svg') }}\" alt=\"\">
                        <p>Społeczność</p>
                    </a>
                    </div>
                    <div class=\"nav__option btn-inactive flex gap-3 justify-left items-center gap-4\">
                    <a href=\"\" class=\"flex gap-3\">
                        <img src=\"{{ asset('img/ustawienia-off.svg') }}\" alt=\"\">
                        <p>Ustawienia</p>
                    </a>
                    </div>
                </div>
            </div>

        </div>

        <div class=\"main-container w-full h-full flex flex-col\">
            {# Górny pasek z profilem #}
            <div class=\"nav flex w-full justify-between h-20 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-medium\">
                Dashboard
                </div>

                <div class=\"profile flex justify-center items-center gap-4\">
                    <div class=\"profile-text\">
                        <a href=\"{{ path('app_register') }}\">
                            <p>{{ userData.firstname }} {{ userData.lastname }} </p>
                        </a>
                    </div>

                    <div class=\"profile-icon w-30 h-30\">
                        <a href=\"{{ path('app_register') }}\">
                            <img src=\"{{ asset('/img/profile.svg') }}\">
                        </a>
                    </div>
                </div>
            </div>

            {# Panel główny dashboardu #}
            <div class=\"habits__main h-full w-full main__background flex gap-4 flex-col\">
                {# Lewy panel #}
                <div class=\"habits__panel--top w-full h-28 flex justify-between mt-6 items-center\">
                    <div class=\"ml-8\">
                        <p class=\"text-3xl font-semibold mb-3\">Dzisiaj</p>
                        <p class=\"text-lg\">{{ day }} | {{ today }}</p>
                    </div>
                    <div class=\"mr-8 bg-white w-72 h-20 rounded-3xl flex items-center justify-between\">
                        <p class=\"ml-4 text-xl\">Najdłuższa seria</p>
                        <div class=\"main__background--gold w-12 h-12 rounded-xl mr-4 flex justify-center items-center\">
                        
                        </div>
                    </div>
                </div>
                
                <div class=\"habits__panel-main w-full h-full flex flex-row gap-8\">

                    <div class=\"habits__panel--left mt-4 mb-8 ml-8 flex flex-col gap-6\">
                        <div class=\"overflow-hidden m-8 flex flex-col gap-4\">
                        <p class=\"text-2xl\">Nawyki</p>
                            <div class=\"habits__panel__habit overflow-y-scroll overflow-x-hidden\">
                                <form method=\"post\" action=\"{{ path('app_tracking_habit') }}\">
                                    {% for h in habits %}
                                        <div class=\"border rounded-xl mb-5 w-full\">
                                            <label class=\"habits__row flex p-4 items-center gap-4 cursor-pointer justify-between\">
                                                <div class=\"habits__row flex items-center gap-4\">
                                                    {% if h.habit.category.id == 1 %}
                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-blue-100\">
                                                            <img src=\"{{ asset('img/icon-blue.svg') }}\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    {% elseif h.habit.category.id == 2 %}
                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-green-100\">
                                                            <img src=\"{{ asset('img/icon-green.svg') }}\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    {% elseif h.habit.category.id == 3 %}
                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-orange-100\">
                                                            <img src=\"{{ asset('img/icon-yellow.svg') }}\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    {% endif %}
                                                
                                                    {% if not h.isDeleted %}
                                                        {{ h.habit.name ?? h.ownHabit.name }}
                                                </div>
                                                
                                                <div class=\"flex items-center \">
                                                    <div class=\"habits__habit-row w-48 flex items-center\">
                                                    <input type=\"checkbox\" name=\"habits[]\" value=\"{{ h.id }}\" class=\"habits__checkbox cursor-pointer invisible\"
                                                    {% for t in tracked %}
                                                        {% if t.selectedHabits and t.selectedHabits.id == h.id and not t.selectedHabits.isDeleted and not t.isDeleted %}
                                                            checked
                                                        {% endif %}
                                                    {% endfor %}
                                                    onchange=\"this.form.submit()\" >
                                            {% endif %}


                                                    <div class=\"habits__checkbox-progress h-2 rounded-md main__background--gold\"></div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    {% endfor %}
                                    {# <button type=\"submit\">Zapisz</button> #}
                                </form>
                            </div>
                            <div class=\"habits__select-btn w-full flex justify-end\">
                                <div class=\"overflow-hidden relative w-auto h-auto\">
                                    <a class=\"btn w-24 relative\" href=\"{{ path('app_select_habit') }}\"><button class=\"bg-black text-white text-4xl w-24 rounded-xl mt-1\">+</button></a>
                                    <div class=\"btn-dot absolute bottom-1 left-0\"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {# <a href=\"{{ path('app_select_habit') }}\"><button>Wybierz nawyki</button></a>
                    <a href=\"{{ path('app_new_habit') }}\"><button>Stwórz nowy nawyk</button></a>
                    <a href=\"{{ path('app_habit_remove') }}\"><button>Usuń nawyk</button></a>  #}

                    {# Prawy panel #}
                    <div class=\"habits__panel--right mb-8 mr-8 mt-4\">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "habit/index.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/habit/index.html.twig");
    }
}
