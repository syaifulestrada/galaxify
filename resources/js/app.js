const THEME_STORAGE_KEY = 'theme'

function getStoredTheme() {
  const t = localStorage.getItem(THEME_STORAGE_KEY)
  return t === 'dark' || t === 'light' ? t : null
}

function getPreferredTheme() {
  return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
    ? 'dark'
    : 'light'
}

function applyTheme(theme) {
  const root = document.documentElement
  root.classList.toggle('dark', theme === 'dark')

  const sun = document.getElementById('theme-toggle-icon-sun')
  const moon = document.getElementById('theme-toggle-icon-moon')

  if (sun && moon) {
    // If we're in dark mode, show sun (switch to light). Otherwise show moon.
    sun.classList.toggle('hidden', theme !== 'dark')
    moon.classList.toggle('hidden', theme === 'dark')
  }
}

function bootTheme() {
  const theme = getStoredTheme() ?? getPreferredTheme()
  applyTheme(theme)

  const toggle = document.getElementById('theme-toggle')
  if (toggle && !toggle.dataset.themeBound) {
    toggle.dataset.themeBound = '1'
    toggle.addEventListener('click', () => {
      const next = (document.documentElement.classList.contains('dark')) ? 'light' : 'dark'
      localStorage.setItem(THEME_STORAGE_KEY, next)
      applyTheme(next)
    })
  }
}

// Run early + on SPA-like navigations (Filament / Livewire).
document.addEventListener('DOMContentLoaded', bootTheme)
document.addEventListener('livewire:navigated', bootTheme)
