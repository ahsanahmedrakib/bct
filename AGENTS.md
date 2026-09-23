# Project Rules (BCT)

## Seed data separation
- The database contains seed data (default products/projects/categories marked with `seed = true`) for populating the public website.
- **The admin panel must ALWAYS show real data only. Seed data must NEVER appear anywhere in the admin panel** — not in lists, stats/dashboard counts, dropdowns, or recent items. All admin queries must filter `where('seed', false)`.
- Seed rows are read-only from the admin API: show / update / delete on a seed record returns 403.
- Admin-added records are always stored with `seed = false`.
- The public website shows seed data AND admin data; admin (non-seed) data displays over seed data.

## General
- Follow existing conventions (Laravel, blade layouts, `resources/js/admin.js` as the shared admin script).