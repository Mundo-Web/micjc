import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
const plugin = require("tailwindcss/plugin");
const animated = require("tailwindcss-animated")

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontWeight: {
                medium: "500",
                regular: "400",
                semibold: "600",
            },
            boxShadow: {
                DEFAULT:
                    "0 1px 3px 0 rgba(0, 0, 0, 0.08), 0 1px 2px 0 rgba(0, 0, 0, 0.02)",
                md: "0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -1px rgba(0, 0, 0, 0.02)",
                lg: "0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.01)",
                xl: "0 20px 25px -5px rgba(0, 0, 0, 0.08), 0 10px 10px -5px rgba(0, 0, 0, 0.01)",
            },
            outline: {
                blue: "2px solid rgba(0, 112, 244, 0.5)",
            },
            fontFamily: {
                moderat_700: ["Montserrat-Bold", "sans-serif"],
                moderat_500: ["Montserrat-Regular", "sans-serif"],
                moderat_400: ["moderat-400", "sans-serif"],
                moderat_300: ["moderat-300", "sans-serif"],
                space_grotesk: ["Space Grotesk", "sans-serif"],
                inter: ["Inter", "sans-serif"],
                moderat_Medium: ["moderat-Medium", "sans-serif"],
                moderat_Regular: ["Montserrat-Regular", "sans-serif"],
                moderat_Bold: ["Montserrat-Bold", "sans-serif"],
                moderatItalic_500: ["moderat-italic", "sans-serif"],
                Montserrat_Bold: ["Montserrat-Bold", "sans-serif"],
                Montserrat_SemiBold: ["Montserrat-SemiBold", "sans-serif"],
                Montserrat_Medium: ["Montserrat-Medium", "sans-serif"],
                Montserrat_Regular: ["Montserrat-Regular", "sans-serif"],
                Montserrat_Light: ["Montserrat-Light", "sans-serif"],
                Montserrat_Black: ["Montserrat-Black", "sans-serif"],

            },
            fontSize: {
                xs: ["0.75rem", { lineHeight: "1.5" }],
                sm: ["0.875rem", { lineHeight: "1.5715" }],
                base: ["1rem", { lineHeight: "1.5", letterSpacing: "-0.01em" }],
                lg: [
                    "1.125rem",
                    { lineHeight: "1.5", letterSpacing: "-0.01em" },
                ],
                xl: [
                    "1.25rem",
                    { lineHeight: "1.5", letterSpacing: "-0.01em" },
                ],
                "2xl": [
                    "1.5rem",
                    { lineHeight: "1.33", letterSpacing: "-0.01em" },
                ],
                "3xl": [
                    "1.88rem",
                    { lineHeight: "1.33", letterSpacing: "-0.01em" },
                ],
                "4xl": [
                    "2.25rem",
                    { lineHeight: "1.25", letterSpacing: "-0.02em" },
                ],
                "5xl": [
                    "3rem",
                    { lineHeight: "1.25", letterSpacing: "-0.02em" },
                ],
                "6xl": [
                    "3.75rem",
                    { lineHeight: "1.2", letterSpacing: "-0.02em" },
                ],
                text8: "8px",
                text9: "9px",
                text10: "10px",
                text12: "12px",
                text13: "13px",
                text14: "14px",
                text15: "15px",
                text16: "16px",
                text18: "18px",
                text20: "20px",
                text22: "22px",
                text24: "24px",
                text28: "28px",
                text30: "30px",
                text32: "32px",
                text36: "36px",
                text40: "40px",
                text44: "44px",
                text48: "48px",
                text52: "52px",
                text56: "56px",
                text60: "60px",
                text64: "64px",
                text68: "68px",
                text72: "72px",
                text76: "76px",
                text80: "80px",
                text84: "84px",
            },

            backgroundColor: {
                colorBackgroundHeader: "#21201E",
                colorBackgroundMainTop: "#21201E",
                colorBackgroundProducts: "#F8F6F2",
                colorBackgroundNewProduct: "#38CB89",
            },
            textColor: {
                colorSubtitle: "#113E55",
                colorSubtitleLittle: "#173525",
                colorAdd: "#2D694B",
                colorTextBlack: "#151515",
            },
            borderColor: {
                selectCheck: "#173525",
                colorBorder: "#151515",
            },

            backgroundImage: {
                "close-menu": "url(../images/prueba/icon-close.svg)",
                "open-menu": "url(../images/prueba/icon-hamburger.svg)",
            },

            screens: {
                xs: "320px",
                "2xs": "370px",
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1536px",
            },
            borderWidth: {
                3: "3px",
            },
            minWidth: {
                36: "9rem",
                44: "11rem",
                56: "14rem",
                60: "15rem",
                72: "18rem",
                80: "20rem",
            },
            maxWidth: {
                "8xl": "88rem",
                "9xl": "96rem",
            },
            zIndex: {
                60: "60",
            },
        },
    },

    plugins: [
        forms,
        typography,
        animated,
        // add custom variant for expanding sidebar
        plugin(({ addVariant, e }) => {
            addVariant("sidebar-expanded", ({ modifySelectors, separator }) => {
                modifySelectors(
                    ({ className }) =>
                        `.sidebar-expanded .${e(
                            `sidebar-expanded${separator}${className}`
                        )}`
                );
            });
        }),
    ],
};
