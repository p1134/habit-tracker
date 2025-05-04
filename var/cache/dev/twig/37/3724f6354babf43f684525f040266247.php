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

/* dashboard/index.html.twig */
class __TwigTemplate_c5dc4a9ea28bd986f46083f238c0abe3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        yield "Habitify - Pulpit";
        
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

                <div class=\"flex flex-col justify-between h-3/4 items-center\">
                    <div class=\"nav__tabs flex flex-col gap-5\">

                            <a class=\"w-auto h-auto\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                                <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                    <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                        <img class=\"w-5 h-5\" src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/dashboard.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        <p>Pulpit</p>
                                    </div>
                                <div class=\"btn__nav-dot absolute bottom-1 left-0\"></div>
                                </div>
                            </a>

                        <div class=\"nav__habits btn-inactive flex gap-3 justify-left items-center gap-4\">
                            <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit");
        yield "\" class=\"flex gap-3\">
                                <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nawyki-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                                <p>Nawyki</p>
                            </a>
                        </div>
                        <div class=\"nav__summary btn-inactive flex gap-3 justify-left items-center gap-4\">
                            <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_summary");
        yield "\" class=\"flex gap-3\">
                                <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/podsumowanie-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                                <p>Podsumowanie</p>
                            </a>
                        </div>
                        <div class=\"nav__society btn-inactive flex gap-3 justify-left items-center gap-4\">
                            <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_community");
        yield "\" class=\"flex gap-3\">
                                <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spolecznosc-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                                <p>Społeczność</p>
                            </a>
                        </div>
                        <div class=\"nav__option btn-inactive flex gap-3 justify-left items-center gap-4\">
                            <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\" class=\"flex gap-3\">
                                <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/profil-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                                <p>Mój profil</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"flex gap-4 cursor-pointer items-center justify-center\">
                        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn-logout flex gap-4 items-center justify-center\">
                            <i class=\"logout-icon fa-solid fa-right-from-bracket text-3xl\"></i><span>Wyloguj</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"main-container w-full h-full flex flex-col\">
            ";
        // line 66
        yield "            <div class=\"nav flex w-full justify-between h-20 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-semibold\">
                Pulpit
                </div>

                <div class=\"profile flex justify-center items-center gap-4\">
                    <div class=\"profile-text\">
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                            <p>";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 74, $this->source); })()), "firstname", [], "any", false, false, false, 74), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 74, $this->source); })()), "lastname", [], "any", false, false, false, 74), "html", null, true);
        yield " </p>
                        </a>
                    </div>

                    <div class=\"profile-icon w-30 h-30\">
                        <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">
                            ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 80, $this->source); })()), "gender", [], "any", false, false, false, 80) == "M")) {
            // line 81
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 83
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profilek.svg"), "html", null, true);
            yield "\">
                            ";
        }
        // line 85
        yield "                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 91
        yield "            <div class=\"habits__main h-full w-full main__background flex gap-4 flex-col\">
                ";
        // line 93
        yield "                <div class=\"habits__panel--top w-full h-28 flex justify-between mt-6 items-center\">
                    <div class=\"ml-8\">
                        <p class=\"text-3xl font-semibold mb-3\">Dzisiaj</p>
                        <p class=\"text-lg\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new RuntimeError('Variable "day" does not exist.', 96, $this->source); })()), "html", null, true);
        yield " | ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"mr-8 bg-white w-72 h-20 rounded-3xl flex items-center justify-between\">
                        <p class=\"ml-8 text-xl\">Najdłuższa seria</p>
                        <div class=\"main__background--gold w-12 h-12 rounded-xl mr-8 flex justify-center items-center text-3xl font-semibold\">      
                            ";
        // line 101
        yield (((array_key_exists("maxStreak", $context) &&  !(null === $context["maxStreak"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["maxStreak"], "html", null, true)) : (0));
        yield "
                        </div>
                    </div>
                </div>
                
                <div class=\"habits__panel-main w-full h-full flex flex-row gap-8\">

                    <div class=\"habits__panel--left mt-4 mb-8 ml-8 flex flex-col gap-6\">
                        <div class=\"overflow-hidden m-8 flex flex-col gap-4\">
                        <p class=\"text-2xl\">Nawyki</p>
                            <div class=\"habits__panel__habit overflow-y-scroll overflow-x-hidden\">
                                <form method=\"post\" action=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tracking_habit");
        yield "\">
                                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habits"]) || array_key_exists("habits", $context) ? $context["habits"] : (function () { throw new RuntimeError('Variable "habits" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 114
            yield "                                        <div class=\"border rounded-xl mb-5 w-full\">
                                            <label class=\"habits__row flex p-4 items-center gap-4 cursor-pointer justify-between\">
                                                <div class=\"habits__row flex items-center gap-4\">
                                                    ";
            // line 117
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 117)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 117), "category", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117) == 1)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 117)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 117), "category", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117) == 1)))) {
                // line 118
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-blue-100\">
                                                            <img src=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-blue.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            } elseif ((( !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 123
$context["h"], "habit", [], "any", false, false, false, 123)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 123), "category", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == 2)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 123)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 123), "category", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123) == 2)))) {
                // line 124
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-green-100\">
                                                            <img src=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-green.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            } elseif ((( !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 129
$context["h"], "habit", [], "any", false, false, false, 129)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 129), "category", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129) == 3)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 129)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 129), "category", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129) == 3)))) {
                // line 130
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-orange-100\">
                                                            <img src=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-yellow.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            }
            // line 136
            yield "                                                
                                                    ";
            // line 137
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["h"], "isDeleted", [], "any", false, false, false, 137)) {
                // line 138
                yield "                                                        ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, true, false, 138), "name", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true)));
                yield "
                                                </div>
                                                
                                                <div class=\"flex items-center \">
                                                    <div class=\"habits__habit-row w-48 flex items-center\">
                                                    <input type=\"checkbox\" name=\"habits[]\" value=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 143), "html", null, true);
                yield "\" class=\"habits__checkbox cursor-pointer invisible\"
                                                    ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracked"]) || array_key_exists("tracked", $context) ? $context["tracked"] : (function () { throw new RuntimeError('Variable "tracked" does not exist.', 144, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 145
                    yield "                                                    ";
                    // line 148
                    yield "                                                        ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 148) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148) == CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 148))) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 148), "isDeleted", [], "any", false, false, false, 148)) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["t"], "isDeleted", [], "any", false, false, false, 148))) {
                        // line 149
                        yield "                                                            checked
                                                        ";
                    }
                    // line 151
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                yield "                                                    onchange=\"this.form.submit()\" >
                                            ";
            }
            // line 154
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
        // line 162
        yield "                                    ";
        // line 163
        yield "                                </form>
                            </div>
                        </div>
                    </div>


                    ";
        // line 172
        yield "
                    ";
        // line 174
        yield "                    <div class=\"habits__panel--right mb-8 mr-8 mt-4 flex flex-col gap-6\">
                        <div class=\"habits__panel-right--top h-3/4 flex flex-col\">
                            <div class=\"m-8 overflow-hidden\">
                                <p class=\"text-2xl\">Postęp</p>
                                <div class=\"chart w-full h-full flex items-start justify-center\">
                                    <div class=\"w-72 relative\">
                                    ";
        // line 180
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 180, $this->source); })()));
        yield "
                                    </div>
                                    <div class=\"chart__text absolute text-center\">
                                        <p>";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["trackedCount"]) || array_key_exists("trackedCount", $context) ? $context["trackedCount"] : (function () { throw new RuntimeError('Variable "trackedCount" does not exist.', 183, $this->source); })()), "html", null, true);
        yield " 
                                            ";
        // line 184
        if (((isset($context["trackedCount"]) || array_key_exists("trackedCount", $context) ? $context["trackedCount"] : (function () { throw new RuntimeError('Variable "trackedCount" does not exist.', 184, $this->source); })()) == "1")) {
            yield " nawyk 
                                            ";
        } elseif ((((        // line 185
(isset($context["trackedCount"]) || array_key_exists("trackedCount", $context) ? $context["trackedCount"] : (function () { throw new RuntimeError('Variable "trackedCount" does not exist.', 185, $this->source); })()) == "2") || ((isset($context["trackedCount"]) || array_key_exists("trackedCount", $context) ? $context["trackedCount"] : (function () { throw new RuntimeError('Variable "trackedCount" does not exist.', 185, $this->source); })()) == "3")) || ((isset($context["trackedCount"]) || array_key_exists("trackedCount", $context) ? $context["trackedCount"] : (function () { throw new RuntimeError('Variable "trackedCount" does not exist.', 185, $this->source); })()) == "4"))) {
            yield " nawyki
                                            ";
        } else {
            // line 187
            yield "                                                 nawyków
                                            ";
        }
        // line 188
        yield "</p>
                                        <p class=\"text-gray-600 font-light\">";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["percentage"]) || array_key_exists("percentage", $context) ? $context["percentage"] : (function () { throw new RuntimeError('Variable "percentage" does not exist.', 189, $this->source); })()), "html", null, true);
        yield "%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"habits__panel-right--bottom h-1/4 flex items-center\">
                            <div class=\"day_streak flex gap-6 items-center ml-4\">
                                <p class=\"ml-4 text-xl\">Dzień</p>
                                <div class=\"main__background--gold w-12 h-12 rounded-xl mr-4 flex justify-center items-center text-3xl font-semibold\">
                                    ";
        // line 198
        yield ((((isset($context["currentStreak"]) || array_key_exists("currentStreak", $context) ? $context["currentStreak"] : (function () { throw new RuntimeError('Variable "currentStreak" does not exist.', 198, $this->source); })()) != 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentStreak"]) || array_key_exists("currentStreak", $context) ? $context["currentStreak"] : (function () { throw new RuntimeError('Variable "currentStreak" does not exist.', 198, $this->source); })()), "html", null, true)) : ("?"));
        yield "
                                </div>
                            </div>
                        </div>
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
        return "dashboard/index.html.twig";
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
        return array (  438 => 198,  426 => 189,  423 => 188,  419 => 187,  414 => 185,  410 => 184,  406 => 183,  400 => 180,  392 => 174,  389 => 172,  381 => 163,  379 => 162,  366 => 154,  362 => 152,  356 => 151,  352 => 149,  349 => 148,  347 => 145,  343 => 144,  339 => 143,  330 => 138,  328 => 137,  325 => 136,  318 => 132,  314 => 130,  312 => 129,  306 => 126,  302 => 124,  300 => 123,  294 => 120,  290 => 118,  288 => 117,  283 => 114,  279 => 113,  275 => 112,  261 => 101,  251 => 96,  246 => 93,  243 => 91,  236 => 85,  230 => 83,  224 => 81,  222 => 80,  218 => 79,  208 => 74,  204 => 73,  195 => 66,  183 => 56,  174 => 50,  170 => 49,  162 => 44,  158 => 43,  150 => 38,  146 => 37,  138 => 32,  134 => 31,  123 => 23,  117 => 20,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Habitify - Pulpit{% endblock %}

{% block body %}

<div class=\"habits__container w-full h-screen flex flex-col\">

    <div class=\"flex flex w-full h-full\">
        {# Nawigacja #}
        <div class=\"nav__container h-full mt-5 flex justify-center\">
            <div class=\"nav__container h-full flex flex-col items-center\">
                <div class=\"nav__name mb-16\">
                    <p class=\"text-4xl font-bold\">HABITIF<span class=\"main-color\">Y.</span></p>
                </div>

                <div class=\"flex flex-col justify-between h-3/4 items-center\">
                    <div class=\"nav__tabs flex flex-col gap-5\">

                            <a class=\"w-auto h-auto\" href=\"{{ path('app_dashboard') }}\">
                                <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                    <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                        <img class=\"w-5 h-5\" src=\"{{ asset('/img/dashboard.svg') }}\" alt=\"\">
                                        <p>Pulpit</p>
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
                            <a href=\"{{ path('app_summary') }}\" class=\"flex gap-3\">
                                <img src=\"{{ asset('img/podsumowanie-off.svg') }}\" alt=\"\">
                                <p>Podsumowanie</p>
                            </a>
                        </div>
                        <div class=\"nav__society btn-inactive flex gap-3 justify-left items-center gap-4\">
                            <a href=\"{{ path('app_community') }}\" class=\"flex gap-3\">
                                <img src=\"{{ asset('img/spolecznosc-off.svg') }}\" alt=\"\">
                                <p>Społeczność</p>
                            </a>
                        </div>
                        <div class=\"nav__option btn-inactive flex gap-3 justify-left items-center gap-4\">
                            <a href=\"{{ path('app_profile') }}\" class=\"flex gap-3\">
                                <img src=\"{{ asset('img/profil-off.svg') }}\" alt=\"\">
                                <p>Mój profil</p>
                            </a>
                        </div>
                    </div>
                    <div class=\"flex gap-4 cursor-pointer items-center justify-center\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn-logout flex gap-4 items-center justify-center\">
                            <i class=\"logout-icon fa-solid fa-right-from-bracket text-3xl\"></i><span>Wyloguj</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"main-container w-full h-full flex flex-col\">
            {# Górny pasek z profilem #}
            <div class=\"nav flex w-full justify-between h-20 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-semibold\">
                Pulpit
                </div>

                <div class=\"profile flex justify-center items-center gap-4\">
                    <div class=\"profile-text\">
                        <a href=\"{{ path('app_profile') }}\">
                            <p>{{ userData.firstname }} {{ userData.lastname }} </p>
                        </a>
                    </div>

                    <div class=\"profile-icon w-30 h-30\">
                        <a href=\"{{ path('app_profile') }}\">
                            {% if userData.gender == 'M' %}
                                <img src=\"{{ asset('/img/profile.svg') }}\">
                            {% else %}
                                <img src=\"{{ asset('/img/profilek.svg') }}\">
                            {% endif %}
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
                        <p class=\"ml-8 text-xl\">Najdłuższa seria</p>
                        <div class=\"main__background--gold w-12 h-12 rounded-xl mr-8 flex justify-center items-center text-3xl font-semibold\">      
                            {{ maxStreak ?? 0 }}
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
                                                    {% if h.habit is not null and h.habit.category.id == 1 or h.ownHabit is not null and h.ownHabit.category.id == 1 %}
                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-blue-100\">
                                                            <img src=\"{{ asset('img/icon-blue.svg') }}\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    {% elseif h.habit is not null and h.habit.category.id == 2 or h.ownHabit is not null and h.ownHabit.category.id == 2 %}
                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-green-100\">
                                                            <img src=\"{{ asset('img/icon-green.svg') }}\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    {% elseif h.habit is not null and h.habit.category.id == 3 or h.ownHabit is not null and h.ownHabit.category.id == 3 %}
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
                                                    {# <pre>
                                                        {{ dump(t) }}
                                                    </pre> #}
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
                        </div>
                    </div>


                    {# <a href=\"{{ path('app_select_habit') }}\"><button>Wybierz nawyki</button></a>
                    <a href=\"{{ path('app_new_habit') }}\"><button>Stwórz nowy nawyk</button></a>
                    <a href=\"{{ path('app_habit_remove') }}\"><button>Usuń nawyk</button></a>  #}

                    {# Prawy panel #}
                    <div class=\"habits__panel--right mb-8 mr-8 mt-4 flex flex-col gap-6\">
                        <div class=\"habits__panel-right--top h-3/4 flex flex-col\">
                            <div class=\"m-8 overflow-hidden\">
                                <p class=\"text-2xl\">Postęp</p>
                                <div class=\"chart w-full h-full flex items-start justify-center\">
                                    <div class=\"w-72 relative\">
                                    {{ render_chart(chart) }}
                                    </div>
                                    <div class=\"chart__text absolute text-center\">
                                        <p>{{ trackedCount }} 
                                            {% if trackedCount == '1' %} nawyk 
                                            {% elseif trackedCount == '2' or trackedCount == '3' or trackedCount == '4' %} nawyki
                                            {% else %}
                                                 nawyków
                                            {% endif %}</p>
                                        <p class=\"text-gray-600 font-light\">{{ percentage }}%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"habits__panel-right--bottom h-1/4 flex items-center\">
                            <div class=\"day_streak flex gap-6 items-center ml-4\">
                                <p class=\"ml-4 text-xl\">Dzień</p>
                                <div class=\"main__background--gold w-12 h-12 rounded-xl mr-4 flex justify-center items-center text-3xl font-semibold\">
                                    {{ currentStreak != 0 ? currentStreak:'?' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "dashboard/index.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/dashboard/index.html.twig");
    }
}
