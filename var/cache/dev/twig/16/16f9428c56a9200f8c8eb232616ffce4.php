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

/* habit/_select_habit_form.html.twig */
class __TwigTemplate_08a541a7bdd589237fc94e00de7d6e29 extends Template
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
        // line 8
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habit/_select_habit_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "habit/_select_habit_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "habit/_select_habit_form.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
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

    // line 12
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

        // line 13
        yield "<div class=\"habits__container w-full h-screen flex flex-col\">

    <div class=\"flex flex w-full h-full\">
        ";
        // line 17
        yield "        <div class=\"nav__container h-full mt-5 flex justify-center\">
            <div class=\"nav__container h-full flex flex-col items-center\">
                <div class=\"nav__name mb-16\">
                    <p class=\"text-4xl font-bold\">HABITIF<span class=\"main-color\">Y.</span></p>
                </div>

                <div class=\"flex flex-col justify-between h-3/4 items-center\">
                    <div class=\"nav__tabs flex flex-col gap-5\">

                        <a class=\"w-auto h-auto\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                            <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                <div class=\"nav__dashboard btn-inactive flex gap-3 justify-start items-center relative\">
                                    <img class=\"w-5 h-5\" src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/dashboard-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                                    <p>Dashboard</p>
                                </div>
                            </div>
                        </a>

                        <div class=\"nav__habits flex gap-3 justify-left items-center gap-4\">
                            <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit");
        yield "\" class=\"flex gap-3 w-auto h-auto\">
                                <div class=\"nav__dashboard  w-auto h-auto relative overflow-hidden\">
                                    <div class=\"nav__dashboard btn-active flex gap-3 justify-start items-center relative\">
                                        <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/nawyki.svg"), "html", null, true);
        yield "\" alt=\"\">
                                        <p>Nawyki</p>
                                    </div>
                                <div class=\"btn__nav-dot absolute bottom-1 left-0\"></div>
                                </div>
                            </a>
                        </div>
                        <div class=\"nav__summary btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"\" class=\"flex gap-3\">
                            <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/podsumowanie-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                            <p>Podsumowanie</p>
                        </a>
                        </div>
                        <div class=\"nav__society btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"\" class=\"flex gap-3\">
                            <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spolecznosc-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                            <p>Społeczność</p>
                        </a>
                        </div>
                        <div class=\"nav__option btn-inactive flex gap-3 justify-left items-center gap-4\">
                        <a href=\"\" class=\"flex gap-3\">
                            <img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/ustawienia-off.svg"), "html", null, true);
        yield "\" alt=\"\">
                            <p>Ustawienia</p>
                        </a>
                        </div>
                    </div>
                    <div class=\"flex gap-4 cursor-pointer items-center justify-center\">
                        <a href=\"";
        // line 66
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
        // line 77
        yield "            <div class=\"nav flex w-full justify-between h-10 mb-4 mt-4\">
                <div class=\"name-page ml-8 text-xl font-semibold\">
                Nawyki
                </div>

                <div class=\"profile flex justify-center items-center gap-4\">
                    <div class=\"profile-text\">
                        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <p>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 85, $this->source); })()), "firstname", [], "any", false, false, false, 85), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userData"]) || array_key_exists("userData", $context) ? $context["userData"] : (function () { throw new RuntimeError('Variable "userData" does not exist.', 85, $this->source); })()), "lastname", [], "any", false, false, false, 85), "html", null, true);
        yield " </p>
                        </a>
                    </div>

                    <div class=\"profile-icon w-30 h-30\">
                        <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                            <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/profile.svg"), "html", null, true);
        yield "\">
                        </a>
                    </div>
                </div>
            </div>

            ";
        // line 98
        yield "            <div class=\"habits__main h-full w-full main__background flex gap-4 flex-col\">
                ";
        // line 100
        yield "                
                <div class=\"habits__panel-main w-full h-full flex flex-row gap-8\">

                    <div class=\"habits__panel m-8 flex flex-col gap-6 w-full bg-white rounded-[40px]\">
                        <div class=\"m-8 flex flex-col gap-4 h-full\">
                            <p class=\"text-2xl\">Lista nawyków</p>
                            <div class=\"form-select h-full w-full\">
                                ";
        // line 107
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start', ["attr" => ["class" => "h-full flex flex-col justify-between"]]);
        yield "
                            <div class=\"overflow-hidden flex h-auto\">

                                <div class=\"panel-select--left w-1/3 h-auto\">
                                    <div class=\"panel-select--margin m-4 w-auto h-auto\">
                                        <div class=\"panel-select__text flex flex-col gap-1 mb-4\">
                                            <p>Zdrowie</p>
                                            <div class=\"habits__category-bar habits__category-bar--health w-full rounded-md\"></div>
                                        </div>
                                        <div class=\"overflow-y-scroll overflow-x-hidden h-[22em] flex flex-col gap-4\">
                                           ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "habits", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 118
            yield "                                                ";
            $context["habit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "habits", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "choices", [], "any", false, false, false, 118), $context["key"], [], "array", false, false, false, 118), "data", [], "any", false, false, false, 118);
            // line 119
            yield "                                                
                                                ";
            // line 120
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["habit"]) || array_key_exists("habit", $context) ? $context["habit"] : (function () { throw new RuntimeError('Variable "habit" does not exist.', 120, $this->source); })()), "category", [], "any", false, false, false, 120)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["habit"]) || array_key_exists("habit", $context) ? $context["habit"] : (function () { throw new RuntimeError('Variable "habit" does not exist.', 120, $this->source); })()), "category", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120) == 1))) {
                // line 121
                yield "                                                    <label for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
                yield "\" class=\"panel-select__row--health flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        ";
                // line 123
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "checkbox-hidden"]]);
                yield "
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--health w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-blue.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        ";
                // line 133
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "cursor-pointer"]]);
                yield "
                                                    </label>

                                                ";
            }
            // line 137
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "ownHabits", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 139
            yield "                                                ";
            $context["ownHabit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "ownHabits", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "choices", [], "any", false, false, false, 139), $context["key"], [], "array", false, false, false, 139), "data", [], "any", false, false, false, 139);
            // line 140
            yield "                                                
                                                ";
            // line 141
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ownHabit"]) || array_key_exists("ownHabit", $context) ? $context["ownHabit"] : (function () { throw new RuntimeError('Variable "ownHabit" does not exist.', 141, $this->source); })()), "category", [], "any", false, false, false, 141)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ownHabit"]) || array_key_exists("ownHabit", $context) ? $context["ownHabit"] : (function () { throw new RuntimeError('Variable "ownHabit" does not exist.', 141, $this->source); })()), "category", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141) == 1))) {
                // line 142
                yield "                                                    <label for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
                yield "\" class=\"panel-select__row--health flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        ";
                // line 144
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "checkbox-hidden"]]);
                yield "
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--health w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-blue.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        ";
                // line 154
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "cursor-pointer"]]);
                yield "
                                                    </label>

                                                ";
            }
            // line 158
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"panel-select--middle w-1/3 h-full\">
                                    <div class=\"panel-select--margin m-4 w-auto h-auto\">
                                        <div class=\"panel-select__text flex flex-col gap-1 mb-4\">
                                            <p>Relaks</p>
                                            <div class=\"habits__category-bar habits__category-bar--relax w-full rounded-md\"></div>
                                        </div>
                                        <div class=\"overflow-y-scroll overflow-x-hidden h-[22em] flex flex-col gap-4\">
                                           ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "habits", [], "any", false, false, false, 171));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 172
            yield "                                                ";
            $context["habit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "habits", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "choices", [], "any", false, false, false, 172), $context["key"], [], "array", false, false, false, 172), "data", [], "any", false, false, false, 172);
            // line 173
            yield "                                                
                                                ";
            // line 174
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["habit"]) || array_key_exists("habit", $context) ? $context["habit"] : (function () { throw new RuntimeError('Variable "habit" does not exist.', 174, $this->source); })()), "category", [], "any", false, false, false, 174)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["habit"]) || array_key_exists("habit", $context) ? $context["habit"] : (function () { throw new RuntimeError('Variable "habit" does not exist.', 174, $this->source); })()), "category", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174) == 2))) {
                // line 175
                yield "                                                    <label for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 175), "id", [], "any", false, false, false, 175), "html", null, true);
                yield "\" class=\"panel-select__row--relax flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        ";
                // line 177
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "checkbox-hidden"]]);
                yield "
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--relax w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-green.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        ";
                // line 187
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "cursor-pointer"]]);
                yield "
                                                    </label>

                                                ";
            }
            // line 191
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "ownHabits", [], "any", false, false, false, 192));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 193
            yield "                                                ";
            $context["ownHabit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "ownHabits", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "choices", [], "any", false, false, false, 193), $context["key"], [], "array", false, false, false, 193), "data", [], "any", false, false, false, 193);
            // line 194
            yield "                                                
                                                ";
            // line 195
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ownHabit"]) || array_key_exists("ownHabit", $context) ? $context["ownHabit"] : (function () { throw new RuntimeError('Variable "ownHabit" does not exist.', 195, $this->source); })()), "category", [], "any", false, false, false, 195)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ownHabit"]) || array_key_exists("ownHabit", $context) ? $context["ownHabit"] : (function () { throw new RuntimeError('Variable "ownHabit" does not exist.', 195, $this->source); })()), "category", [], "any", false, false, false, 195), "id", [], "any", false, false, false, 195) == 2))) {
                // line 196
                yield "                                                    <label for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 196), "id", [], "any", false, false, false, 196), "html", null, true);
                yield "\" class=\"panel-select__row--relax flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        ";
                // line 198
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "checkbox-hidden"]]);
                yield "
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--relax w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-green.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        ";
                // line 208
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "cursor-pointer"]]);
                yield "
                                                    </label>

                                                ";
            }
            // line 212
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"panel-select--right w-1/3 h-full\">
                                    <div class=\"panel-select--margin m-4 w-auto h-auto\">
                                        <div class=\"panel-select__text flex flex-col gap-1 mb-4\">
                                            <p>Aktywność społeczna</p>
                                            <div class=\"habits__category-bar habits__category-bar--activity w-full rounded-md\"></div>
                                        </div>
                                        <div class=\"overflow-y-scroll overflow-x-hidden h-[22em] flex flex-col gap-4\">
                                           ";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "habits", [], "any", false, false, false, 225));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 226
            yield "                                                ";
            $context["habit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "habits", [], "any", false, false, false, 226), "vars", [], "any", false, false, false, 226), "choices", [], "any", false, false, false, 226), $context["key"], [], "array", false, false, false, 226), "data", [], "any", false, false, false, 226);
            // line 227
            yield "                                                
                                                ";
            // line 228
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["habit"]) || array_key_exists("habit", $context) ? $context["habit"] : (function () { throw new RuntimeError('Variable "habit" does not exist.', 228, $this->source); })()), "category", [], "any", false, false, false, 228)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["habit"]) || array_key_exists("habit", $context) ? $context["habit"] : (function () { throw new RuntimeError('Variable "habit" does not exist.', 228, $this->source); })()), "category", [], "any", false, false, false, 228), "id", [], "any", false, false, false, 228) == 3))) {
                // line 229
                yield "                                                    <label for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 229), "id", [], "any", false, false, false, 229), "html", null, true);
                yield "\" class=\"panel-select__row--activity flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        ";
                // line 231
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "checkbox-hidden"]]);
                yield "
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--activity w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-yellow.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        ";
                // line 241
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "cursor-pointer"]]);
                yield "
                                                    </label>

                                                ";
            }
            // line 245
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), "ownHabits", [], "any", false, false, false, 246));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            // line 247
            yield "                                                ";
            $context["ownHabit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "ownHabits", [], "any", false, false, false, 247), "vars", [], "any", false, false, false, 247), "choices", [], "any", false, false, false, 247), $context["key"], [], "array", false, false, false, 247), "data", [], "any", false, false, false, 247);
            // line 248
            yield "                                                
                                                ";
            // line 249
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["ownHabit"]) || array_key_exists("ownHabit", $context) ? $context["ownHabit"] : (function () { throw new RuntimeError('Variable "ownHabit" does not exist.', 249, $this->source); })()), "category", [], "any", false, false, false, 249)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ownHabit"]) || array_key_exists("ownHabit", $context) ? $context["ownHabit"] : (function () { throw new RuntimeError('Variable "ownHabit" does not exist.', 249, $this->source); })()), "category", [], "any", false, false, false, 249), "id", [], "any", false, false, false, 249) == 3))) {
                // line 250
                yield "                                                    <label for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 250), "id", [], "any", false, false, false, 250), "html", null, true);
                yield "\" class=\"panel-select__row--activity flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        ";
                // line 252
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "checkbox-hidden"]]);
                yield "
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--activity w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon-yellow.svg"), "html", null, true);
                yield "\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        ";
                // line 262
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "cursor-pointer"]]);
                yield "
                                                    </label>

                                                ";
            }
            // line 266
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        yield "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"btn flex justify-end mr-4 gap-4\">
                                <button type=\"submit\" class=\"w-52 p-2.5 bg-black text-white text-center rounded-xl cursor-pointer\">Zapisz</button>
                                <a href=\"";
        // line 274
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habit");
        yield "\" class=\"w-52 p-2.5 bg-black text-white text-center rounded-xl cursor-pointer\">Powrót</a>
                            </div>
                            ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), 'rest');
        yield "
                            ";
        // line 277
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), 'form_end', ["render_rest" => false]);
        yield "
                            
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
        return "habit/_select_habit_form.html.twig";
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
        return array (  582 => 277,  578 => 276,  573 => 274,  564 => 267,  558 => 266,  551 => 262,  543 => 257,  535 => 252,  529 => 250,  527 => 249,  524 => 248,  521 => 247,  516 => 246,  510 => 245,  503 => 241,  495 => 236,  487 => 231,  481 => 229,  479 => 228,  476 => 227,  473 => 226,  469 => 225,  455 => 213,  449 => 212,  442 => 208,  434 => 203,  426 => 198,  420 => 196,  418 => 195,  415 => 194,  412 => 193,  407 => 192,  401 => 191,  394 => 187,  386 => 182,  378 => 177,  372 => 175,  370 => 174,  367 => 173,  364 => 172,  360 => 171,  346 => 159,  340 => 158,  333 => 154,  325 => 149,  317 => 144,  311 => 142,  309 => 141,  306 => 140,  303 => 139,  298 => 138,  292 => 137,  285 => 133,  277 => 128,  269 => 123,  263 => 121,  261 => 120,  258 => 119,  255 => 118,  251 => 117,  238 => 107,  229 => 100,  226 => 98,  217 => 91,  213 => 90,  203 => 85,  199 => 84,  190 => 77,  177 => 66,  168 => 60,  159 => 54,  150 => 48,  138 => 39,  132 => 36,  122 => 29,  116 => 26,  105 => 17,  100 => 13,  87 => 12,  64 => 10,  41 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {{ form_start(form) }}
    {{ form_widget(form.habits) }}
    {{ form_widget(form.ownHabits) }}
    <button>Zapisz</button>
    <a href=\"{{ path('app_habit') }}\"><button>Anuluj</button></a>
{{ form_end(form) }} #}

{% extends 'base.html.twig' %}

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

                    <div class=\"habits__panel m-8 flex flex-col gap-6 w-full bg-white rounded-[40px]\">
                        <div class=\"m-8 flex flex-col gap-4 h-full\">
                            <p class=\"text-2xl\">Lista nawyków</p>
                            <div class=\"form-select h-full w-full\">
                                {{ form_start(form, {'attr': {'class': 'h-full flex flex-col justify-between'}}) }}
                            <div class=\"overflow-hidden flex h-auto\">

                                <div class=\"panel-select--left w-1/3 h-auto\">
                                    <div class=\"panel-select--margin m-4 w-auto h-auto\">
                                        <div class=\"panel-select__text flex flex-col gap-1 mb-4\">
                                            <p>Zdrowie</p>
                                            <div class=\"habits__category-bar habits__category-bar--health w-full rounded-md\"></div>
                                        </div>
                                        <div class=\"overflow-y-scroll overflow-x-hidden h-[22em] flex flex-col gap-4\">
                                           {% for key, field in form.habits %}
                                                {% set habit = form.habits.vars.choices[key].data %}
                                                
                                                {% if habit.category is not null and habit.category.id == 1 %}
                                                    <label for=\"{{ field.vars.id }}\" class=\"panel-select__row--health flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        {{ form_widget(field, {'attr': {'class': 'checkbox-hidden'}}) }}
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--health w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"{{ asset('img/icon-blue.svg') }}\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        {{ form_label(field, null, {'label_attr': {'class': 'cursor-pointer'}}) }}
                                                    </label>

                                                {% endif %}
                                            {% endfor %}
                                            {% for key, field in form.ownHabits %}
                                                {% set ownHabit = form.ownHabits.vars.choices[key].data %}
                                                
                                                {% if ownHabit.category is not null and ownHabit.category.id == 1 %}
                                                    <label for=\"{{ field.vars.id }}\" class=\"panel-select__row--health flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        {{ form_widget(field, {'attr': {'class': 'checkbox-hidden'}}) }}
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--health w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"{{ asset('img/icon-blue.svg') }}\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        {{ form_label(field, null, {'label_attr': {'class': 'cursor-pointer'}}) }}
                                                    </label>

                                                {% endif %}
                                            {% endfor %}

                                        </div>
                                    </div>
                                </div>

                                <div class=\"panel-select--middle w-1/3 h-full\">
                                    <div class=\"panel-select--margin m-4 w-auto h-auto\">
                                        <div class=\"panel-select__text flex flex-col gap-1 mb-4\">
                                            <p>Relaks</p>
                                            <div class=\"habits__category-bar habits__category-bar--relax w-full rounded-md\"></div>
                                        </div>
                                        <div class=\"overflow-y-scroll overflow-x-hidden h-[22em] flex flex-col gap-4\">
                                           {% for key, field in form.habits %}
                                                {% set habit = form.habits.vars.choices[key].data %}
                                                
                                                {% if habit.category is not null and habit.category.id == 2 %}
                                                    <label for=\"{{ field.vars.id }}\" class=\"panel-select__row--relax flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        {{ form_widget(field, {'attr': {'class': 'checkbox-hidden'}}) }}
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--relax w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"{{ asset('img/icon-green.svg') }}\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        {{ form_label(field, null, {'label_attr': {'class': 'cursor-pointer'}}) }}
                                                    </label>

                                                {% endif %}
                                            {% endfor %}
                                            {% for key, field in form.ownHabits %}
                                                {% set ownHabit = form.ownHabits.vars.choices[key].data %}
                                                
                                                {% if ownHabit.category is not null and ownHabit.category.id == 2 %}
                                                    <label for=\"{{ field.vars.id }}\" class=\"panel-select__row--relax flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        {{ form_widget(field, {'attr': {'class': 'checkbox-hidden'}}) }}
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--relax w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"{{ asset('img/icon-green.svg') }}\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        {{ form_label(field, null, {'label_attr': {'class': 'cursor-pointer'}}) }}
                                                    </label>

                                                {% endif %}
                                            {% endfor %}

                                        </div>
                                    </div>
                                </div>

                                <div class=\"panel-select--right w-1/3 h-full\">
                                    <div class=\"panel-select--margin m-4 w-auto h-auto\">
                                        <div class=\"panel-select__text flex flex-col gap-1 mb-4\">
                                            <p>Aktywność społeczna</p>
                                            <div class=\"habits__category-bar habits__category-bar--activity w-full rounded-md\"></div>
                                        </div>
                                        <div class=\"overflow-y-scroll overflow-x-hidden h-[22em] flex flex-col gap-4\">
                                           {% for key, field in form.habits %}
                                                {% set habit = form.habits.vars.choices[key].data %}
                                                
                                                {% if habit.category is not null and habit.category.id == 3 %}
                                                    <label for=\"{{ field.vars.id }}\" class=\"panel-select__row--activity flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        {{ form_widget(field, {'attr': {'class': 'checkbox-hidden'}}) }}
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--activity w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"{{ asset('img/icon-yellow.svg') }}\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        {{ form_label(field, null, {'label_attr': {'class': 'cursor-pointer'}}) }}
                                                    </label>

                                                {% endif %}
                                            {% endfor %}
                                            {% for key, field in form.ownHabits %}
                                                {% set ownHabit = form.ownHabits.vars.choices[key].data %}
                                                
                                                {% if ownHabit.category is not null and ownHabit.category.id == 3 %}
                                                    <label for=\"{{ field.vars.id }}\" class=\"panel-select__row--activity flex items-center gap-4 border rounded-md p-2 pl-4 pr-4\">
                                                        <!-- Ukryty checkbox -->
                                                        {{ form_widget(field, {'attr': {'class': 'checkbox-hidden'}}) }}
                                                        
                                                        <!-- Ikona, która będzie pełniła rolę kliknięcia -->
                                                        <div class=\"panel-select__icon w-9 h-9 flex\">
                                                            <div class=\"panel-select__icon--activity w-9 h-9 rounded-3xl flex items-center justify-center\">
                                                                <img src=\"{{ asset('img/icon-yellow.svg') }}\" alt=\"\">
                                                            </div>
                                                        </div>

                                                        <!-- Etykieta checkboxa -->
                                                        {{ form_label(field, null, {'label_attr': {'class': 'cursor-pointer'}}) }}
                                                    </label>

                                                {% endif %}
                                            {% endfor %}

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"btn flex justify-end mr-4 gap-4\">
                                <button type=\"submit\" class=\"w-52 p-2.5 bg-black text-white text-center rounded-xl cursor-pointer\">Zapisz</button>
                                <a href=\"{{ path('app_habit') }}\" class=\"w-52 p-2.5 bg-black text-white text-center rounded-xl cursor-pointer\">Powrót</a>
                            </div>
                            {{ form_rest(form) }}
                            {{ form_end(form, { 'render_rest': false }) }}
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "habit/_select_habit_form.html.twig", "/Users/paulina/Desktop/habit-tracker/templates/habit/_select_habit_form.html.twig");
    }
}
