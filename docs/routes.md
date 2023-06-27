# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | Dans les shoe | 5 categories | - |
| `/category/[i:id]` | `GET` | `CatalogController` | `category` | Dans les shoe | 1 category + les articles de cette catégorie | - |
| `/legal-notice` | `GET` | `MainController` | `legal-notice` | Mentions légales | Legal Notice | - |
| `/type/[i:id]` | `GET` | `CatalogController` | `type` | Dans les shoe | 4 types | - |
| `/brand/[i:id]` | `GET` | `CatalogController` | `brand` | Dans les shoe | 1 brand + les articles de cette marque | - |
| `/product/[i:id]` | `GET` | `CatalogController` | `product` | Dans les shoe | 1 product | - |
