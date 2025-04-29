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
class __TwigTemplate_2814b50b2a626810ce0199c7b02a1057 extends Template
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

                <div class=\"flex flex-col justify-between h-3/4 items-center\">
                    <div class=\"nav__tabs flex flex-col gap-5\">

                        <a class=\"w-auto h-auto\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                            <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                <div class=\"nav__dashboard btn-inactive flex gap-3 justify-start items-center relative\">
                                    <img class=\"w-5 h-5\" src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/dashboard-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                                    <p>Dashboard</p>
                                </div>
                            </div>
                        </a>

                        <div class=\"nav__habits flex gap-3 justify-left items-center gap-4\">
                            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit");
        yield "\" class=\"flex gap-3 w-auto h-auto\">
                                <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                    <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                        <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nawyki.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        <p>Nawyki</p>
                                    </div>
                                <div class=\"btn__nav-dot absolute bottom-1 left-0\"></div>
                                </div>
                            </a>
                        </div>
                        <div class=\"nav__summary btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_summary");
        yield "\" class=\"flex gap-3\">
                            <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/podsumowanie-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                            <p>Podsumowanie</p>
                        </a>
                        </div>
                        <div class=\"nav__society btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"\" class=\"flex gap-3\">
                            <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spolecznosc-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                            <p>Społeczność</p>
                        </a>
                        </div>
                        <div class=\"nav__option btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"\" class=\"flex gap-3\">
                            <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ustawienia-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                            <p>Ustawienia</p>
                        </a>
                        </div>
                    </div>
                    <div class=\"flex gap-4 cursor-pointer items-center justify-center\">
                        <a href=\"";
        // line 60
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
        // line 71
        yield "            <div class=\"nav flex w-full justify-between h-10 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-semibold\">
                Nawyki
                </div>

                <div class=\"profile flex justify-center items-center gap-4\">
                    <div class=\"profile-text\">
                        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <p>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 79, $this->source); })()), "firstname", [], "any", false, false, false, 79), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 79, $this->source); })()), "lastname", [], "any", false, false, false, 79), "html", null, true);
        yield " </p>
                        </a>
                    </div>

                    <div class=\"profile-icon w-30 h-30\">
                        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
        yield "\">
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 92
        yield "            <div class=\"habits__main h-full w-full main__background flex gap-4 flex-col\">
                ";
        // line 94
        yield "                
                <div class=\"habits__panel-main w-full h-full flex flex-row gap-8\">

                    <div class=\"habits__panel--left habits__panel mt-8 mb-8 ml-8 flex flex-col gap-6\">
                        <div class=\"overflow-hidden m-8 flex flex-col gap-4\">
                        <p class=\"text-2xl\">Twoje nawyki</p>
                            <div class=\"habits__panel__habit overflow-y-scroll overflow-x-hidden\">
                                <form method=\"post\" action=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tracking_habit");
        yield "\">
                                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habits"]) || array_key_exists("habits", $context) ? $context["habits"] : (function () { throw new RuntimeError('Variable "habits" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 103
            yield "                                        <div class=\"border rounded-xl mb-5 w-full\">
                                            <label class=\"habits__row flex p-4 items-center gap-4 cursor-pointer justify-between\">
                                                <div class=\"habits__row flex items-center gap-4\">
                                                    ";
            // line 106
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 106)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 106), "category", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106) == 1)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 106)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 106), "category", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106) == 1)))) {
                // line 107
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-blue-100\">
                                                            <img src=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-blue.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            } elseif ((( !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 112
$context["h"], "habit", [], "any", false, false, false, 112)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 112), "category", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112) == 2)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 112)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 112), "category", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112) == 2)))) {
                // line 113
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-green-100\">
                                                            <img src=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-green.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            } elseif ((( !(null === CoreExtension::getAttribute($this->env, $this->source,             // line 118
$context["h"], "habit", [], "any", false, false, false, 118)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 118), "category", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118) == 3)) || ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 118)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 118), "category", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118) == 3)))) {
                // line 119
                yield "                                                    <div class=\"w-9\">
                                                        <div class=\"habits__panel__habit-icon w-9 h-9 rounded-3xl flex justify-center items-center bg-orange-100\">
                                                            <img src=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-yellow.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                        </div>
                                                    </div>
                                                    ";
            }
            // line 125
            yield "                                                
                                                    ";
            // line 126
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["h"], "isDeleted", [], "any", false, false, false, 126)) {
                // line 127
                yield "                                                        ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, true, false, 127), "name", [], "any", true, true, false, 127) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "habit", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["h"], "ownHabit", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true)));
                yield "
                                                </div>
                                                
                                                <div class=\"flex items-center \">
                                                    <div class=\"habits__habit-row w-48 flex items-center\">
                                                    <input type=\"checkbox\" name=\"habits[]\" value=\"";
                // line 132
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 132), "html", null, true);
                yield "\" class=\"habits__checkbox cursor-pointer invisible\"
                                                    ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tracked"]) || array_key_exists("tracked", $context) ? $context["tracked"] : (function () { throw new RuntimeError('Variable "tracked" does not exist.', 133, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                    // line 134
                    yield "                                                        ";
                    if ((((CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 134) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134) == CoreExtension::getAttribute($this->env, $this->source, $context["h"], "id", [], "any", false, false, false, 134))) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["t"], "selectedHabits", [], "any", false, false, false, 134), "isDeleted", [], "any", false, false, false, 134)) &&  !CoreExtension::getAttribute($this->env, $this->source, $context["t"], "isDeleted", [], "any", false, false, false, 134))) {
                        // line 135
                        yield "                                                            checked
                                                        ";
                    }
                    // line 137
                    yield "                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                yield "                                                    onchange=\"this.form.submit()\" >
                                            ";
            }
            // line 140
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
        // line 148
        yield "                                    ";
        // line 149
        yield "                                </form>
                            </div>
                            
                            <div class=\"habits__select-btn w-full flex\">
                                <div class=\"overflow-hidden relative w-full h-auto\">
                                    <a class=\"btn--habits w-full relative\" href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_select_habit");
        yield "\"><button class=\"bg-black text-white text-md w-full rounded-xl mt-1 flex items-center justify-center gap-4 pt-1 pb-1\"><span class=\"main-color text-3xl\">+</span> Edytuj listę</button></a>
                                    <div class=\"btn-dot--habits absolute bottom-1 left-0\"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    ";
        // line 165
        yield "
                    ";
        // line 167
        yield "                    <div class=\"habits__panel--right mb-8 mr-8 mt-8 flex flex-col gap-6 h-auto\">
                        <div class=\"habits__panel-right--top h-3/5 flex flex-col\">
                            <div class=\"m-8 h-full flex flex-col\">
                                <p class=\"text-2xl\">Kategorie</p>
                                <div class=\"categories flex flex-col h-full justify-between\">
                                    <div class=\"w-full h-auto flex flex-col gap-3 items-center justify-center mt-8\">
                                        <div class=\"habits__category-row flex flex-col w-full h-auto\">
                                            <p>Zdrowie</p>
                                            <div class=\"habits__category-bar habits__category-bar--health rounded-md\"></div>
                                        </div>
                                        <div class=\"habits__category-row flex flex-col w-full h-auto\">
                                            <p>Relaks</p>
                                            <div class=\"habits__category-bar habits__category-bar--relax rounded-md\"></div>
                                        </div>
                                        <div class=\"habits__category-row flex flex-col w-full h-auto\">
                                            <p>Aktywność społeczna</p>
                                            <div class=\"habits__category-bar habits__category-bar--activity rounded-md\"></div>
                                        </div>
                                    </div>

                                    <div class=\"categories-buttons w-full h-auto flex gap-4\">
                                        <a href=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_new_habit");
        yield "\" class=\"overflow-hidden w-1/2 bg-black category-btn flex justify-center rounded-xl pt-1 pb-1 relative ";
        yield ((((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 188, $this->source); })()) == "ownHabitAdd")) ? ("hidden") : ("visible"));
        yield " ";
        yield ((((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 188, $this->source); })()) == "ownHabitRemove")) ? ("hidden") : ("visible"));
        yield "\">
                                            <button class=\"btn--categories relative text-white flex gap-4 items-center justofy-center\"><span class=\"main-color text-3xl\">+</span>Stwórz nowy nawyk</button>
                                            <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
                                        </a>
                                        <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit_remove");
        yield "\" class=\"overflow-hidden w-1/2 bg-black category-btn flex justify-center rounded-xl pt-1 pb-1 relative ";
        yield ((((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 192, $this->source); })()) == "ownHabitAdd")) ? ("hidden") : ("visible"));
        yield " ";
        yield ((((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 192, $this->source); })()) == "ownHabitRemove")) ? ("hidden") : ("visible"));
        yield "\">
                                            <button class=\"btn--categories relative text-white flex gap-4 items-center justofy-center\"><span class=\"main-color text-3xl\">-</span>Usuń własny nawyk</button>
                                            <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ";
        // line 199
        if (((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 199, $this->source); })()) == "ownHabitAdd")) {
            // line 200
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "/habit/_new_habit_form.html.twig");
            yield "
                        ";
        }
        // line 202
        yield "                        ";
        if (((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 202, $this->source); })()) == "ownHabitRemove")) {
            // line 203
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "/habit/_remove_habit_form.html.twig");
            yield "
                        ";
        }
        // line 205
        yield "                        </div>

                        ";
        // line 215
        yield "                    </div>
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
        return array (  436 => 215,  432 => 205,  426 => 203,  423 => 202,  417 => 200,  415 => 199,  401 => 192,  390 => 188,  367 => 167,  364 => 165,  353 => 154,  346 => 149,  344 => 148,  331 => 140,  327 => 138,  321 => 137,  317 => 135,  314 => 134,  310 => 133,  306 => 132,  297 => 127,  295 => 126,  292 => 125,  285 => 121,  281 => 119,  279 => 118,  273 => 115,  269 => 113,  267 => 112,  261 => 109,  257 => 107,  255 => 106,  250 => 103,  246 => 102,  242 => 101,  233 => 94,  230 => 92,  221 => 85,  217 => 84,  207 => 79,  203 => 78,  194 => 71,  181 => 60,  172 => 54,  163 => 48,  154 => 42,  150 => 41,  139 => 33,  133 => 30,  123 => 23,  117 => 20,  106 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

                <div class=\"flex flex-col justify-between h-3/4 items-center\">
                    <div class=\"nav__tabs flex flex-col gap-5\">

                        <a class=\"w-auto h-auto\" href=\"{{ path('app_dashboard') }}\">
                            <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                <div class=\"nav__dashboard btn-inactive flex gap-3 justify-start items-center relative\">
                                    <img class=\"w-5 h-5\" src=\"{{ asset('/img/dashboard-off.svg') }}\" alt=\"\">
                                    <p>Dashboard</p>
                                </div>
                            </div>
                        </a>

                        <div class=\"nav__habits flex gap-3 justify-left items-center gap-4\">
                            <a href=\"{{ path('app_habit') }}\" class=\"flex gap-3 w-auto h-auto\">
                                <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                    <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                        <img src=\"{{ asset('img/nawyki.svg') }}\" alt=\"\">
                                        <p>Nawyki</p>
                                    </div>
                                <div class=\"btn__nav-dot absolute bottom-1 left-0\"></div>
                                </div>
                            </a>
                        </div>
                        <div class=\"nav__summary btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"{{ path('app_summary') }}\" class=\"flex gap-3\">
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
            <div class=\"nav flex w-full justify-between h-10 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-semibold\">
                Nawyki
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
                
                <div class=\"habits__panel-main w-full h-full flex flex-row gap-8\">

                    <div class=\"habits__panel--left habits__panel mt-8 mb-8 ml-8 flex flex-col gap-6\">
                        <div class=\"overflow-hidden m-8 flex flex-col gap-4\">
                        <p class=\"text-2xl\">Twoje nawyki</p>
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
                            
                            <div class=\"habits__select-btn w-full flex\">
                                <div class=\"overflow-hidden relative w-full h-auto\">
                                    <a class=\"btn--habits w-full relative\" href=\"{{ path('app_select_habit') }}\"><button class=\"bg-black text-white text-md w-full rounded-xl mt-1 flex items-center justify-center gap-4 pt-1 pb-1\"><span class=\"main-color text-3xl\">+</span> Edytuj listę</button></a>
                                    <div class=\"btn-dot--habits absolute bottom-1 left-0\"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {# <a href=\"{{ path('app_select_habit') }}\"><button>Wybierz nawyki</button></a>
                    <a href=\"{{ path('app_new_habit') }}\"><button>Stwórz nowy nawyk</button></a>
                    <a href=\"{{ path('app_habit_remove') }}\"><button>Usuń nawyk</button></a>  #}

                    {# Prawy panel #}
                    <div class=\"habits__panel--right mb-8 mr-8 mt-8 flex flex-col gap-6 h-auto\">
                        <div class=\"habits__panel-right--top h-3/5 flex flex-col\">
                            <div class=\"m-8 h-full flex flex-col\">
                                <p class=\"text-2xl\">Kategorie</p>
                                <div class=\"categories flex flex-col h-full justify-between\">
                                    <div class=\"w-full h-auto flex flex-col gap-3 items-center justify-center mt-8\">
                                        <div class=\"habits__category-row flex flex-col w-full h-auto\">
                                            <p>Zdrowie</p>
                                            <div class=\"habits__category-bar habits__category-bar--health rounded-md\"></div>
                                        </div>
                                        <div class=\"habits__category-row flex flex-col w-full h-auto\">
                                            <p>Relaks</p>
                                            <div class=\"habits__category-bar habits__category-bar--relax rounded-md\"></div>
                                        </div>
                                        <div class=\"habits__category-row flex flex-col w-full h-auto\">
                                            <p>Aktywność społeczna</p>
                                            <div class=\"habits__category-bar habits__category-bar--activity rounded-md\"></div>
                                        </div>
                                    </div>

                                    <div class=\"categories-buttons w-full h-auto flex gap-4\">
                                        <a href=\"{{ path('app_new_habit') }}\" class=\"overflow-hidden w-1/2 bg-black category-btn flex justify-center rounded-xl pt-1 pb-1 relative {{ formType == 'ownHabitAdd' ? 'hidden' : 'visible' }} {{ formType == 'ownHabitRemove' ? 'hidden' : 'visible' }}\">
                                            <button class=\"btn--categories relative text-white flex gap-4 items-center justofy-center\"><span class=\"main-color text-3xl\">+</span>Stwórz nowy nawyk</button>
                                            <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
                                        </a>
                                        <a href=\"{{ path('app_habit_remove') }}\" class=\"overflow-hidden w-1/2 bg-black category-btn flex justify-center rounded-xl pt-1 pb-1 relative {{ formType == 'ownHabitAdd' ? 'hidden' : 'visible' }} {{ formType == 'ownHabitRemove' ? 'hidden' : 'visible' }}\">
                                            <button class=\"btn--categories relative text-white flex gap-4 items-center justofy-center\"><span class=\"main-color text-3xl\">-</span>Usuń własny nawyk</button>
                                            <div class=\"btn-dot--categories absolute bottom-1 left-0\"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {% if formType == 'ownHabitAdd' %}
                            {{ include('/habit/_new_habit_form.html.twig') }}
                        {% endif %}
                        {% if formType == 'ownHabitRemove' %}
                            {{ include('/habit/_remove_habit_form.html.twig') }}
                        {% endif %}
                        </div>

                        {# <div class=\"h-2/5 flex items-center\">
                        {% if formType == 'ownHabitAdd' %}
                            {{ include('/habit/_new_habit_form.html.twig') }}
                        {% endif %}
                        {% if formType == 'ownHabitRemove' %}
                            {{ include('/habit/_remove_habit_form.html.twig') }}
                        {% endif %}
                        </div> #}
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
